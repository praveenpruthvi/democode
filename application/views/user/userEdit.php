<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<form role="form">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" id="name" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Email ID</label>
                <input class="form-control" id="email" name="email" placeholder="Email ID">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input class="form-control" id="name" name="confirmPassword" placeholder="Confirm Password">
            </div>
        </div>
        <button type="submit" class="btn btn-primary" onclick="updateSaveUser();">Submit</button>
        <button type="reset" class="btn btn-default" onclick="goBack();">Reset</button>
    </div>
</form>
