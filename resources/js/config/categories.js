import { TYPE_CATEGORIES } from './types';

const categories = [
    {
        id: TYPE_CATEGORIES.ELDERCARE,
        label: 'Cuidado de Mayores',
        pathImgHeader: "/images/headersCategories/eldercare.jpg",
        icon: '/assets/icon_services/eldercare.svg',
        imagen: "/images/categories/eldercare.jpg",
        desc: {
            title: 'Cuidadores de confianza en tu zona',
            text: 'Encuentra de manera fácil e intuitiva mediante nuestros filtros, a la persona adecuada que se ajuste mejor a tus necesidades. Ayúdate de sus valoraciones y experiencia laboral. La mejor atención domiciliaria a tu disposición, infórmate de sus tarifas, contacta cómodamente y sin ningún tipo de compromiso.'
        },
        homeSelected: true,
        info: "Asistentes, Auxiliares, cuidadores, Atención domiciliaria..."
    },
    {
        id: TYPE_CATEGORIES.PETCARE,
        label: 'Cuidado de Mascotas',
        pathImgHeader: "/images/headersCategories/petcare.jpg",
        icon: '/assets/icon_services/petcare.svg',
        imagen: "/images/categories/petcare.jpg",
        desc: {
            title: 'Ponemos a tu disposición el mejor cuidado y atención para nuestro fiel compañero',
            text: 'Sabemos que hay veces que no le puedes dedicar a tu mascota toda la atención que nos gustaría. Aquí en miitut y en pocos Clics encuentra al cuidador, veterinario, guardería canina o cualquier servicio que necesites para el cuidado de tus mascotas. Infórmate de las tarifas sin ningún tipo de compromiso. Los mejores cuidadores están deseando ayudarte.'
        },
        homeSelected: true,
        info: 'Paseadores, veterinarios, educadores caninos...'
    },

    {
        id: TYPE_CATEGORIES.HOUSEKEEPING,
        label: 'Servicios de limpieza',
        pathImgHeader: "/images/headersCategories/housekeeping.jpg",
        icon: '/assets/icon_services/housekeeping.svg',
        imagen: "/images/categories/housekeeping.jpg",
        desc: {
            title: '¿Necesitas ayuda para limpiar tu casa, local o empresa? Aquí encontrarás el servicio de limpieza más rápido y eficiente, contrátalo desde casa en un instante.',
            text: 'Ayúdate de nuestros filtros par dar con los profesionales más cualificados y que se ajusten perfectamente a lo que buscas. Contacte con la limpiadora ideal y disfrute de sus servicios.'
        },
        homeSelected: true,
        info: "Limpiadoras/es, Interinas, Servicios de empresas..."
    },
    {
        id: TYPE_CATEGORIES.KITCHEN,
        label: 'Servicios de Cocina',
        pathImgHeader: "/images/headersCategories/kitchen.jpg",
        icon: '/assets/icon_services/kitchen.svg',
        imagen: "/images/categories/kitchen.jpg",
        desc: {
            title: 'Olvídate de cocinar, date el capricho y disfruta de comida casera de toda la vida a domicilio, contrata cocineros, servicio de catering o simplemente pide ese plato que tanto te gusta.',
            text: 'Filtra tu búsqueda según el servicio que necesites, contacta de manera fácil y rápida mediante nuestro chat en Miitut. Obtén los mejores servicios al mejor precio. Recuerda que dispones de la posibilidad de pago seguro.'
        },
        info: "Comida Casera, Cocineros, Catering...."
    },
    {
        id: TYPE_CATEGORIES.PERSONAL_TRAINING,
        label: 'Entrenamiento personal a domicilio',
        pathImgHeader: "/images/headersCategories/personalTraining.jpg",
        icon: '/assets/icon_services/personalTraining.svg',
        imagen: "/images/categories/personalTraining.jpg",
        desc: {
            title: 'Encuentra el asesoramiento nutricional que necesitas, el entrenador personal ideal, la monitora de yoga o pilates de tus sueños en pocos clics.',
            text: 'Sabemos lo importante que es vuestro bienestar, por ello con el sistema de búsqueda de miitut tendrás a tu alcance multitud de profesionales dispuestos a ofrecerte sus servicios. Selecciona servicio, contacta con el profesional o directamente reserva tu cita.'
        }
    },
    // {
    //     id: TYPE_CATEGORIES.ELDERLYCARE,
    //     label: 'Atención domiciliaria',
    //     pathImgHeader: "/images/headersCategories/elderlycare.jpg",
    //     icon: '/assets/icon_services/elderlycare.svg',
    //     imagen: "/images/categories/elderlycare.jpg",
    //     desc: {
    //         title: 'Tu salud y cuidado es primordial, por ello en miitut queremos hacerte la vida más fácil y ponemos a tu disposición los mejores profesionales para mejorar tu bienestar. Médicos, enfermeros, acupuntores, naturópatas, fisioterapeutas, quiromasajistas...',
    //         text: 'No te lo pienses más, dirígete al buscador, selecciona el tipo de servicio que requieres, usa nuestros filtros para buscar al profesional que se ajuste a lo que necesitas, ponte en contacto, revisa su agenda y contrata sus servicios. Todo de manera muy fácil e intuitiva.'
    //     }
    // },
    {
        id: TYPE_CATEGORIES.REPAIR,
        label: 'Servicios de Reparación',
        icon: '/assets/icon_services/repair.svg',
        pathImgHeader: "/images/headersCategories/maintenance.jpg",
        imagen: "/images/categories/repair.jpg",
        desc: {
            title: '¿Tienes problemas con algún dispositivo o electrodoméstico?, ordenadores, televisores, frigoríficos, lavadoras... No te preocupes, en miitut te ayudamos a dar con el profesional que necesitas.',
            text: 'Nuestro sistema avanzado de búsqueda te hará todo más cómodo, únicamente selecciona el dispositivo o electrodoméstico a reparar, tu zona y al instante tendrás un listado con los profesionales más cercanos, comprueba su experiencia, mira referencias, tarifas, contacta con ellos. El profesional que necesitas está esperando.'
        },
        info: "Informáticos, Técnicos de Frigoríficos, Lavadoras..."
    },
    {
        id: TYPE_CATEGORIES.GARDERNS,
        label: 'Jardinería y piscinas',
        icon: '/assets/icon_services/garder.svg',
        pathImgHeader: "/images/headersCategories/gander.jpg",
        imagen: "/images/categories/garder.jpg",
        desc: {
            title: 'Con el buen tiempo nada mejor que disfrutar de un jardín o piscina en las mejores condiciones. Todos sabemos que esto requiere de un buen mantenimiento y para ello en miitut te damos la mejor solución.',
            text: 'Te ayudamos a encontrar a los mejores profesionales para su puesta a punto y mantenimiento. Únicamente selecciona el servicio, elige ubicación y nuestro sistema te mostrará los candidatos más cercanos, con nuestros filtros todo te resultará más fácil, mira sus habilidades, experiencia, tarifas, comprueba su disponibilidad mediante el uso de su agenda, contacta y realiza la contratación. Por si fuera poco, tienes a tu disposición nuestro servicio de pago seguro.'
        },
        info: "Jardineros, Mantenimiento de piscina, Podas..."
    },
    {
        id: TYPE_CATEGORIES.HAIRDRESSING,
        label: 'Servicios de peluquería',
        icon: '/assets/icon_services/hairdressing.svg',
        pathImgHeader: "/images/headersCategories/hairdressing.jpg",
        imagen: "/images/categories/hairdressing.jpg",
        desc: {
            title: '¿Cansada de pasar largas horas en peluquerías esperando a que te atiendan? O simplemente ¿quieres comodidad? Aquí en miitut te ayudamos a encontrar el servicio que necesitas.',
            text: 'Utiliza nuestro buscador para dar con el profesional adecuado para tu cuidado estético facial y corporal, desde corta el cabello, peinados, tintes, manicuras, maquillajes, depilación y mucho más. Ayúdate de nuestros filtros, selecciona el servicio que necesites, elige profesional y pide tu cita. Recuerda que disponemos de pago seguro.'
        },
        info: "Peluqueras/os, Maquilladoras, Esteticien...."
    },
    {
        id: TYPE_CATEGORIES.MAINTENANCE,
        label: 'Mantenimiento',
        icon: '/assets/icon_services/maintenance.svg',
        pathImgHeader: "/images/headersCategories/maintenance.jpg",
        imagen: "/images/categories/maintenance.jpg",
        desc: {
            title: 'Porque no todos somos unos manitas y es normal que necesitemos ayuda, ponemos a tu disposición un amplio abanico de profesionales para tu hogar. Desde electricistas, fontaneros, servicios de albañilería, pintura o incluso hasta mecánico de coches. Todo lo que necesites, aquí lo encontrarás.',
            text: 'Para ello dirígete al buscador, selecciona el tipo de servicio que requieres, usa nuestros filtros para buscar al profesional que se ajuste a lo que necesitas, ponte en contacto y contrata sus servicios. Todo de manera muy fácil e intuitiva.'
        },
        homeSelected: true,
        info: "Albañiles, Fontaneros, Carpinteras, Gas, Electricista..."
    },
    {
        id: TYPE_CATEGORIES.BABY_SITTER,
        label: 'Cuidado de niños',
        icon: '/assets/icon_services/babySitter.svg',
        pathImgHeader: "/images/headersCategories/babySitter.jpg",
        imagen: "/images/categories/babySitter.jpg",
        desc: {
            title: 'La niñera de tus sueños está más cerca de casa de lo que imaginas, ¿A qué esperas?',
            text: 'Como sabemos lo importantes que son los pequeños de la casa, para ellos sólo queremos lo mejor y aquí en miitut te ayudamos a encontrar a la canguro de confianza, una persona responsable, con dedicación y experiencia, comprueba sus habilidades, ayúdate de los comentarios de otras personas y contacta con las candidatas ideales mediante nuestro chat online. En pocos minutos y de manera muy fácil dispondrás de la ayuda que necesitas.'
        },
        homeSelected: true,
        info: "Cuidadores de Bebes, babysitter, canguros..."
    },
    {
        id: TYPE_CATEGORIES.TUTORING,
        label: 'Profesores Particulares',
        icon: '/assets/icon_services/tutoring.svg',
        pathImgHeader: "/images/headersCategories/tutoring.jpg",
        imagen: "/images/categories/tutoring.jpg",
        desc: {
            title: '¿Necesitas clases particulares online o a domicilio? No pierdas el tiempo',
            text: 'Encuentra el profesor particular perfecto, clases de refuerzo pasa esa asignatura que se le resiste un poco, ayuda con las tareas o simplemente adquirir nuevos conocimientos para el nuevo curso. Usa nuestro buscador, ayúdate de sus filtros, mira sus habilidades, experiencia, tarifas, comprueba su disponibilidad mediante el uso de su agenda, además con nuestro sistema de geolocalización darás con los posibles candidatos más próximos, la profesora que necesitas está más cerca de lo que imaginas.'
        },
        homeSelected: true,
        info: "Matemáticas, Idiomas, Física, Química, Historia..."
    },
    {
        id: TYPE_CATEGORIES.PARASANITARY,
        label: 'Parasanitaria',
        icon: '/assets/icon_service/parasanitary.svg',
        pathImgHeader: "/images/headersCategories/parasanitary.jpg",
        imagen: "/images/categories/parasanitary.jpg",
        desc: {
            title: 'Tu salud y cuidado es primordial, por ello en miitut queremos hacerte la vida más fácil y ponemos a tu disposición los mejores profesionales para mejorar tu bienestar. Médicos, enfermeros, acupuntores, naturópatas, fisioterapeutas, quiromasajistas...',
            text: 'No te lo pienses más, dirígete al buscador, selecciona el tipo de servicio que requieres, usa nuestros filtros para buscar al profesional que se ajuste a lo que necesitas, ponte en contacto, revisa su agenda y contrata sus servicios. Todo de manera muy fácil e intuitiva.'
        },
        info: "Médicos, Enfermeros, Fisioterapeutas, Acupuntores"
    }
];


export default categories;
