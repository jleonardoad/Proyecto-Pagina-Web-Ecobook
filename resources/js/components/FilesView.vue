<template>
 <div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 <h1>Archivos</h1>
 </div>

 <div class="card-body">
 <table class="table">
 <th>Nombre</th>
 <th>Tamaño</th>
 <th>Accion</th>
 <tr v-for="(files,i) in file" :key="i">
 <div v-if="!$gate.isAdmin()" class="ifcondition">
 <div v-if="files.user_id == user" class="ifcondition">
 <td>{{ files.filename }}</td>
 <td>{{ files.size }} bytes</td>
 <td>
 <button
 class="btn btn-secondary perso"
 @click="download(files.path, files.filename)"
 >
 <i id="button_color" class="fas fa-download"></i>
 </button>
 <button class="btn btn-danger" @click="deleteFile(files.id, files.path)">
 <i class="fa fa-trash"></i>
 </button>
 </td>
 </div>
 </div>
 <div v-else class="ifcondition">
 <td>{{ files.filename }}</td>
 <td>{{ Math.trunc (files.size/1000)}} KB</td>
 <td>
 <button
 class="btn btn-secondary perso"
 @click="download(files.path, files.filename)"
 >
 <i id="button_color" class="fas fa-download"></i>
 </button>
 <button class="btn btn-danger" @click="deleteFile(files.id, files.path)">
 <i class="fa fa-trash"></i>
 </button>
 </td>
 </div>
 </tr>
 </table>
 </div>
 </div>
 </div>
 </div>
 </div>
</template>

<script>
export default {
 data() {
 return {
 file: [],
 user: ""
 };
 },
 mounted() {
 console.log("Component mounted.");
 },
 methods: {
 //do the update to the data
 update() {
 axios
 .get("/fil")
 .then(response => {
 this.file = response.data;
 })
 .catch(e => {
 console.log(e);
 });

 axios
 .get("/id-user")
 .then(response => {
 this.user = response.data;
 })
 .catch(e => {
 console.log(e);
 });
 },
 //Function to delete file
 deleteFile(id, path) {
 //
 swal
 .fire({
 title: "Seguro?",
 text: "Esta acción no puede ser revertida!",
 type: "warning",
 showCancelButton: true,
 confirmButtonColor: "#3085d6",
 cancelButtonColor: "#d33",
 confirmButtonText: "Borrar"
 })
 .then(result => {
 //Server API
 if (result.value) {
 axios
 .post("delete/" + id + "/" + path, {
 headers: {
 "Content-Type": "multipart/form-data"
 }
 })
 .then(response => {
 this.file = response.data;
 this.update();
 })
 .catch(e => {
 console.log(e);
 });
 }
 });
 },

 //download direction
 download(paht, filename) {
 window.open("/down/" + paht + "/" + filename);
 }
 },
 created() {
 axios
 .get("/fil")
 .then(response => {
 this.file = response.data;
 })
 .catch(e => {
 console.log(e);
 });

 axios
 .get("/id-user")
 .then(response => {
 this.user = response.data;
 })
 .catch(e => {
 console.log(e);
 });
 }
};
</script>

<style scoped>
.ifcondition {
 display: contents;
}

#button_color {
 color: #ffffff;
}

.perso {
 background-color: #38c172;
}
</style>