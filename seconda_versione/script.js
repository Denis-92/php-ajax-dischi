console.log("JS - OK");

const app = new Vue(
    {
        el: "#app",

        data() {
            return {
                songs: [],
                show_only: "",
            };
        },

        methods: {
            getSongs(genre) {
                axios.get("./songs.php?show_only=" + genre).then(
                    (response) => {

                        if (response.status === 200) {
                            this.songs = response.data;
                        }

                    }
                ).catch((error) => console.log(error));
            }
        },

        created() {
            this.getSongs("");
        },

    }
);