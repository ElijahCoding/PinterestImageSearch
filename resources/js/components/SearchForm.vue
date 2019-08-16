<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Поиск Котов....</div>

                    <div class="card-body">
                        <form class="" action="index.html" method="post" >
                            <div class="form-group">
                                <input type="text" class="form-control" v-model="query">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" name="button">Поиск</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                query: ''
            }
        }
    }
</script>
