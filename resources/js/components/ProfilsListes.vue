<template>
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nom</th>
                    <th>Contact</th>
                    <th>Choix</th>
                    <th>Naissance</th>
                    <th>Niveau</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr v-for="profil in profils.data" :key="profil.id">
                    <td>{{ profil.prenom }} <br/> {{ profil.nom }}</td>
                    <td>Tel : {{ profil.tel }} <br/> Email: {{ profil.email }}</td>
                     <td>- {{ profil.choix1 }} <br/> - {{ profil.choix2 }}</td>
                    <td>{{ profil.dateNaissance }}<br/>  {{ profil.lieuNaissance }}</td>
                     <td>{{ profil.etudeNiveau }}<br/>  {{ profil.EtudeAnnee }} - {{ profil.etudeLieu }}</td>
                    <td>
                          <!-- Right navbar links -->
                    
                    <div class="row">
                        <button class="col btn btn-outline-dark">  <i class="far fa-comments"></i>      </button>
                        <button class="col btn btn-outline-dark">  <i class="far fa-comments"></i>      </button>
                        <button class="col btn btn-outline-danger">  <i class="far fa-comments"></i>      </button>
                    </div>
    
                    </td>




                     </tr>
                     </tbody>
                  <tfoot>
                  <tr>
                    <th>Nom</th>
                    <th>Contact</th>
                    <th>Choix</th>
                    <th>Naissance</th>
                    <th>Niveau</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
              <div>
                  <ul>
                    <li v-for="post in profils.data" :key="post.nom">{{ post.nom }}</li>
                </ul>

                <pagination :data="profils" @pagination-change-page="getResults"></pagination>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
</template>

<script>
    export default {

	data() {
		return {
			// Our data object that holds the Laravel paginator data
			laravelData: {},
		}
	},

	mounted() {
		// Fetch initial results
		this.getResults();
	},

	methods: {
		// Our method to GET results from a Laravel endpoint
		getResults(page = 1) {
			axios.get('http://127.0.0.1:8000/profils/getactive?page=' + page)
				.then(response => {
					this.laravelData = response.data;
				});
		}
	}

}
</script>