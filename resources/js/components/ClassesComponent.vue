<template>
    <div class="container text-center pt-2">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> ClassesComponent</div>

                    <div class="card-body">
                       {{ test }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
         data: function () {
        return {
        test: 'name carrera'
        }
        },       
       mounted() {
        console.log('Component mounted.')
        }
    }
</script>