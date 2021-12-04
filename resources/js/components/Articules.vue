<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Customer Page</div>

                     <form @submit.prevent="submit" method="POST">
                     <div class="form-group">
                        <lable name="lname" >First Name</lable>
                        <input type="text" name="fname" v-model="articules.fname" class="form-control">
                     </div>
                     <div class="form-group">
                        <lable name="lname">Last Name</lable>
                        <input type="text" name="lname" v-model="articules.lname" class="form-control">
                     </div>
                     <div class="form-group">
                        <lable name="lcontact">Contact</lable>
                        <input type="text" name="contact" v-model="articules.contact" class="form-control">
                     </div>
                     <div class="form-group">
                        <lable name="laddress">Address</lable>
                        <input type="text" name="address" v-model="articules.address" class="form-control">
                     </div>
                     <div class="form-group">
                        <lable name="lpancardno">PAN card</lable>
                        <input type="text" name="pancardno" v-model="articules.pancardno"  class="form-control">
                     </div>
                     <div class="form-group">
                        <lable name="ladharcardno">Adhar card</lable>
                        <input type="text" name="adharcardno" v-model="articules.adharcardno"  class="form-control">
                     </div>
                     <div class="form-group">
                        <lable name="lreference">Reference</lable>
                        <input type="text" name="reference" v-model="articules.reference"  class="form-control">
                     </div>
                     <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>

                    </form>
                    </div>
                </div>
            </div>
      </div>
    </div>
</template>
<style>
.col-12 {
 
width: 100%;
    justify-content: center;
    text-align: center;
    padding: 5%;
    }
</style>
