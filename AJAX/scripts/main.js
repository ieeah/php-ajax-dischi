

const app = new Vue({
	el: '#app',
	data: {
		albums: [],
	},
	created() {
		this.getAlbums();
	},
	methods: {
		getAlbums() {
			axios.get('http://localhost/php-ajax-dischi/AJAX/scripts/database.php').then(response => {
				this.albums = response.data;
				console.log(this.albums);
			});
		},
	},
});

