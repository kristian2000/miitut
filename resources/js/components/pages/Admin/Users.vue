<script>
import LayoutAdmin from '../../../layouts/LayoutAdmin'
import { 
    MoreVerticalIcon,
    Edit3Icon,
    Trash2Icon,
    SearchIcon
 } from 'vue-feather-icons'

export default {
    data(){
        return {
            users: [],
            fields: [
                { key: 'avatar', label: 'Avatar'},
                { key: 'name', label: 'Nombre' },
                { key: 'email', label: 'Correo'},
                { key: 'userType', label: 'Tipo' },
                { key: 'country', label: 'Pais' },
                { key: 'more', label: 'Info'}
            ],
            loading: false,
            currentUser: null,
            date: { valid: false},
            searchUser: '',
            selectedUserField: 'name'
        }
    },
    created(){
        this.getUsers();
    },
    components: {
        LayoutAdmin,
        MoreVerticalIcon,
        Edit3Icon,
        Trash2Icon,
        SearchIcon
    },
    computed: {
        listUsers(){
            return this.users.filter(item => {
                let field = item[`${this.selectedUserField}`].toLowerCase();
                return field.includes(this.searchUser.toLowerCase());
            })
        }
    },
    methods: {
        async getUsers(){
            this.loading = true;
            const response = await this.callApi('get', `app/admin/users`);
            console.log(response)

            if (response.status === 200){
                let users = response.data;

                this.users = users;
                this.listUsers = users;

                this.loading = false; 
            }
        },
        info(user, index, button) {
            console.log(user)
            this.currentUser = { ...user };
            this.$bvModal.show('modalUser')
        },
        onContext(ctx) {
            // The date formatted in the locale, or the `label-no-date-selected` string
            this.date.valid = ctx.selectedFormatted !== 'No date selected'
            // The following will be an empty string until a valid date is entered
            this.selected = ctx.selectedYMD
        },
        async updateUser(){
            console.log('updateUser', this.currentUser)
            const response = await this.callApi('put', 'app/admin/users', this.currentUser)

            if (response.status === 200){
                let user = response.data.user;
                this.users = this.users.map(u => u.id !== user.id ? u : user)
                this.$bvModal.hide('modalUser')
                this.currentUser = null;
                this.makeNotice('success', 'Edicion Exitosa', 'El proceso ha sido completado exitosamente.');
            }else{
                this.makeNotice('danger', 'Oops', 'Ocurrio un error al intentar actualizar el usuario');
            }

            console.log('Response', response);
        }
    }
}
</script>

<template>
    <LayoutAdmin active="Usuarios">
        <div class="col-12 col-lg-8" v-if="!loading">
            <div class="col-12 mb-2">
                <div class="subcribe-form mt-4 pt-2">
                    <div class="form-group mb-0">

                    <div class="row d-flex align-items-center">
                        <div class="col-8">
                            <b-input
                                id="url"
                                v-model="searchUser"
                                class="border bg-white rounded-lg"
                                required
                                :placeholder="`Escribe aqui el ${selectedUserField}`"
                            />
                        </div>
                        <div class="col-4 mb-2">
                            <label class="text-muted mb-0" >Buscar por:</label>
                            <b-form-select
                                style="max-width: 100px"
                                v-model="selectedUserField" 
                                size="sm" 
                                :options="[
                                    { value: 'name', text: 'Nombre'},
                                    { value: 'email', text: 'Email'}
                                ]" 
                            />
                        </div>
                    </div>
                    
                    <!-- <b-button 
                        class="btn btn-pills btn-primary"
                    >
                        <SearchIcon />
                    </b-button> -->
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div class="font-weight-bold mb-2">
                    Lista de Usuarios
                </div>
                <div>
                   <b-table
                        responsive
                        striped 
                        hover 
                        outlined
                        small
                        :items="listUsers"
                        :fields="fields"
                        style="max-height: 350px"
                          
                    >
                        <template #cell(avatar)="data">
                            <div>
                                <img
                                    :src="data.item.avatar ? data.item.avatar : 'images/avatarDefault.jpg'"
                                    class=" item-avatar shadow d-block"
                                    width="80px"
                                    height="80px"
                                    alt=""
                                >
                            </div>
                        </template>
                        <template #cell(more)="data">
                            <div 
                                class="text-center btn-more"
                                @click="info(data.item, data.index, $event.target)" 
                                
                            >
                                <MoreVerticalIcon 
                                    size="1x"
                                />
                            </div>
                        </template>
                    </b-table>
                </div>
            </div>
        </div>
        <div v-else class="col-12 col-lg-8">
            <div class="d-flex justify-content-center align-items-center">
                <div>
                    <b-spinner 
                        type="grow" 
                        label="Spinning" 
                    />
                </div>

            </div>
        </div>
        <!-- Modal User Start -->
        <b-modal id="modalUser" hide-footer title="Info del Usuario" size="lg">
            <div v-if="currentUser" class="row">
<!--
avatar: (...)
 -->
                <b-form-group 
                    id="name" 
                    label="Informacion del Sistema:" 
                    label-for="name"
                    class="col-12"
                >
                    <div class="d-flex justify-content-around flex-wrap">
                        <div class="size-min-field text-center">
                            <label> Tipo de Usuario: </label>
                            <span> {{ currentUser.userType }} </span>
                        </div>
                        <div class="size-min-field text-center">
                            <label> Fase Registro: </label>
                            <span> {{ currentUser.fase_registry }} </span>
                        </div>
                        <div class="size-min-field text-center">
                            <label> Calificaciones: </label>
                            <div class=""> {{ currentUser.ratings }} </div>
                        </div>
                        <div class="size-min-field text-center">
                            <label> Suma de Puntuajes: </label>
                            <div class=""> {{ currentUser.score }} </div>
                        </div>

                    </div>
                    
                </b-form-group>

                <b-form-group 
                    id="name" 
                    label="Nombre:" 
                    label-for="name"
                    class="col-6"
                >
                    <b-form-input
                        id="name"
                        v-model="currentUser.name"
                        placeholder="Enter name"
                        required
                    ></b-form-input>
                </b-form-group>
                <b-form-group
                    id="email"
                    label="Email:"
                    label-for="email"
                    class="col-6"
                >
                    <b-form-input
                        id="email"
                        v-model="currentUser.email"
                        type="email"
                        placeholder="Enter email"
                        required
                    ></b-form-input>
                </b-form-group>

                 <b-form-group
                    id="nationality"
                    label="Nacionalidad:"
                    label-for="nationality"
                    class="col-6"
                >
                    <b-form-input
                        id="nationality"
                        v-model="currentUser.nationality"
                        type="text"
                        placeholder="Enter nationality"
                        required
                    ></b-form-input>
                </b-form-group>


                <b-form-group 
                    id="description" 
                    label="Descripcion:" 
                    label-for="description"
                    class="col-6"
                >
                    <b-form-input
                        id="description"
                        v-model="currentUser.description"
                        placeholder="Enter Description"
                        required
                    ></b-form-input>
                </b-form-group>

                <b-form-group
                    id="gender"
                    label="Genero:"
                    label-for="gender"
                    class="col-6"
                >
                    <div class="d-flex justify-content-around flex-wrap">
                        <b-form-radio 
                            v-model="currentUser.gender" 
                            name="some-radios" 
                            value="woman"
                            class="btn-checkbox"
                        >
                            Mujer
                        </b-form-radio>
                        <b-form-radio 
                            v-model="currentUser.gender" 
                            name="some-radios" 
                            value="man"
                            class="btn-checkbox"
                        >
                            Hombre
                        </b-form-radio>
                    </div>
                </b-form-group>

                <!-- Start Fecha de Nacimiento -->
                <b-form-group
                    id="birthdate"
                    label="Fecha de Nacimiento:"
                    label-for="birthdate"
                    class="col-6"
                >
                    <b-input-group class="mb-3">
                        <b-form-input
                            id="example-input"
                            v-model="currentUser.birthdate"
                            type="text"
                            placeholder="YYYY-MM-DD"
                            autocomplete="off"
                        ></b-form-input>
                        <b-input-group-append>
                            <b-form-datepicker
                            v-model="currentUser.birthdate"
                            button-only
                            right
                            locale="en-US"
                            aria-controls="example-input"
                            @context="onContext"
                            ></b-form-datepicker>
                        </b-input-group-append>
                    </b-input-group>
                </b-form-group>
                <!-- END Fecha de Nacimiento -->

                <!-- <b-form-group
                    id="dni"
                    label="DNI:"
                    label-for="dni"
                    class="col-6"
                >
                    <b-form-input
                        id="dni"
                        v-model="currentUser.dni"
                        type="number"
                        placeholder="Enter DNI"
                        required
                    ></b-form-input>
                </b-form-group> -->

                <b-form-group
                    id="phone"
                    label="Telefono:"
                    label-for="phone"
                    class="col-6"
                >
                    <vue-tel-input
                        v-model="currentUser.phone"
                        required
                        validCharactersOnly
                        placeholder='Ingresa tu Telefono'
                    />
                </b-form-group>

                <b-form-group
                    id="address"
                    label="Direccion:"
                    label-for="address"
                    class="col-6"
                >
                    <b-form-textarea
                        id="address"
                        v-model="currentUser.address"
                        placeholder="Enter something..."
                        
                    ></b-form-textarea>
                </b-form-group>

                <div
                    class="col-12"
                >

                    <b-form-group
                        id="country"
                        label="Pais:"
                        label-for="country"
                        class="col-6"
                    >
                        <b-form-input
                            id="country"
                            v-model="currentUser.country"
                            type="text"
                            placeholder="Enter country"
                            required
                        ></b-form-input>
                    </b-form-group>

                    <b-form-group
                        id="state"
                        label="Estado:"
                        label-for="state"
                        class="col-6"
                    >
                        <b-form-input
                            id="state"
                            v-model="currentUser.state"
                            type="text"
                            placeholder="Enter State"
                            required
                        ></b-form-input>
                    </b-form-group>
                </div>

            <div class="col-12">
                <div class="d-flex">
                    <b-form-group
                        id="latituded"
                        label="Latitud:"
                        label-for="coords"
                        class="col-4"
                    >
                        <b-form-input
                            id="lat"
                            v-model="currentUser.lat"
                            type="number"
                            placeholder="Enter lat"
                            required
                        ></b-form-input>
                    </b-form-group>

                    <b-form-group
                        id="longituded"
                        label="Longitud:"
                        label-for="longituded"
                        class="col-4"
                    >
                        <b-form-input
                            id="state"
                            v-model="currentUser.lng"
                            type="text"
                            placeholder="Enter State"
                            required
                        ></b-form-input>
                    </b-form-group>

                </div>
            </div>
                
                <b-form-group
                    id="validationsSystem"
                    label="Validaciones del Sistema:"
                    label-for="validationsSystem"
                    class="col-6"
                >
                    <div class="d-flex justify-content-around flex-wrap">
                        <b-form-checkbox
                            v-model="currentUser.email_check"
                            value="1"
                            name="check-button"
                            size="sm"
                            class="btn-checkbox"
                        >
                            Email Confirmado
                        </b-form-checkbox>

                        <b-form-checkbox
                            v-model="currentUser.profile_check"
                            value="1"
                            name="check-button"
                            size="sm" 
                            class="btn-checkbox"
                        >
                            Perfil Confirmado
                        </b-form-checkbox>

                    </div>
                </b-form-group>

                <b-form-group
                    id="validations"
                    label="Validaciones Personales:"
                    label-for="Validaciones"
                    class="col-12"
                >
                    <div class="d-flex justify-content-around flex-wrap">
                        <b-form-checkbox
                            v-model="currentUser.driving_license"
                            value="1"
                            name="check-button"
                            size="sm"
                            class="btn-checkbox"
                        >
                            Carnet de Conducir
                        </b-form-checkbox>

                        <b-form-checkbox
                            v-model="currentUser.own_vehicle"
                            value="1"
                            name="check-button"
                            size="sm" 
                            class="btn-checkbox"
                        >
                            Vehículo Propio
                        </b-form-checkbox>

                            <b-form-checkbox
                                v-model="currentUser.first_aid"
                                value="1"
                                name="check-button"
                                size="sm"
                                class="btn-checkbox"
                            >
                                Primeros Auxilios
                            </b-form-checkbox>

                            <b-form-checkbox
                                    v-model="currentUser.has_children"
                                    value="1"
                                    name="check-button"
                                    size="sm"
                                    class="btn-checkbox"
                                >
                                    Tiene niños
                            </b-form-checkbox>

                    </div>
                </b-form-group>

            </div>
            <div class="d-flex justify-content-center border-top">
                <div class="m-2">
                    <b-button 
                        variant="outline-secondary" 
                        @click="updateUser">
                        <Edit3Icon />
                    </b-button>
                </div>
                <!-- <div class="m-2">
                    <b-button variant="outline-danger">
                        <Trash2Icon />
                    </b-button>
                </div> -->
            </div>
        </b-modal>
        <!-- Modal User End -->
    </LayoutAdmin>
</template>

<style>
    .size-min-field {
        width: 100px;
    }

    .btn-checkbox {
        width: 100px;
    }

    .btn-more {
        cursor: pointer;
        border-radius: 15px;

    }
    .btn-more:hover {
        background: #ddd;
    }

    .item-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: 3px solid #eee;
    }
</style>