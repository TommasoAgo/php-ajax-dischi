var app = new Vue(
    {
        el: "#root",
        data : {
            selectedGenre: "",
            cds : []
        },
        methods : {
            getCds: function() {
                axios
                .get('http://localhost:8888/php-ajax-dischi/server.php', {
                    params: {
                        genere: this.selectedGenre
                    }
                })
                .then((response) => {
                    this.cds = response.data;
                })
            }
        },
        mounted() {
            this.getCds();
        }
    }
)