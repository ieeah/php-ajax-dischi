

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
			axios.get('https://flynn.boolean.careers/exercises/api/array/music').then(response => {
				console.log(response.data);
				this.albums = response.data;
				console.log(this.albums);
			});
		},
	},
});