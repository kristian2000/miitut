window.axios = require('axios');

window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest',
    'Content-Type':'application/json',
    'Accept':'application/json'
    };
