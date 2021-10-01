<template>
    <!-- Start Idiomas -->
    <div class="">
        <h5>Idiomas</h5>
        <!-- lista Selected -->
        <div class="col-12">
            <ul 
                v-for="item in selected" :key="item.code"
                class="row border-bottom"
            >
                <li class="col-12 mb-2">
                    <div class="d-flex justify-content-between">
                        <!-- <label>Idioma</label> -->
                        <div>
                            {{ item.language }} ({{ item.level }})
                        </div>
                        
                        <b-badge 
                            variant="danger"
                            @click="remove(item)"
                        >
                            -
                        </b-badge>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Formulario  -->
        <div class="col-12">
            <div class="row d-flex align-items-center">
                <!-- Formulario -->
                <div class="col-5">
                    <label>Idioma</label>
                    <b-form-select  v-model="languageSelected" :options="languages" />
                </div>
                <div class="col-5">
                    <label>Nivel</label>
                    <b-form-select  
                        v-model="levelSelected"
                        :options="[
                            'Básico',
                            'Intermedio',
                            'Avanzado'
                        ]" 
                    />
                </div>
                <div class="col-1">
                    <div class="mt-4">
                        <b-button 
                            variant="outline-success py-1 px-3"
                            :disabled="!(languageSelected.length || levelSelected.length)"
                            @click="add"
                        >
                            +
                        </b-button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Idiomas -->
</template>

<script>

    import languages from '../config/languages'

    export default {
        props: ["changeHandler", 'dataInitial'],
        data(){
            return {
                languageSelected: "",
                levelSelected: "Basico",
                languagesFormat: [],
                languages: [],
                selected: []
            }
        },
        created(){
            let languagesFormat = languages.map( l => ({
                value: l,
                text: l.label
            }))

            if (this.dataInitial){
                this.selected = this.dataInitial;
            }

            this.languagesFormat = languagesFormat;
            this.languages = languagesFormat;
        },
        methods: {
            settings(){
                // Reajuste Idiomas
                let selected = this.selected.map( s => s.code);
                let languages = this.languagesFormat.filter(l => !selected.includes(l.value.code));

                this.languages = languages;

                this.changeHandler(this.selected);
            },
            add(){
                let newLanguage = {
                    language: this.languageSelected.label,
                    code: this.languageSelected.code,
                    level: this.levelSelected
                };

                this.selected = [...this.selected, newLanguage];

                this.settings();
            },
            remove(item){
                this.selected = this.selected.filter( l => l.code !== item.code);
                this.settings();
            }
        }
    }
</script>

<style scoped>
    .btn-add {
        color: white; 
    }
</style>