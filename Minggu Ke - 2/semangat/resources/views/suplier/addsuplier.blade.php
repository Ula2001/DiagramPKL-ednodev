@extends('layouts.biasa')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <div class="container">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Suplier</h1>
            <hr>
            <form action="{{url('/suplier/adding') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Suplier Name">
                </div>
                <div class="form-group">
                    <label for="address">address:</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Suplier Address">
                </div>
                <div class="form-group">
                    <label for="postal_code">postal_code:</label>
                    <input type="number" class="form-control" id="postal_code" name="postal_code" placeholder="Suplier Phone">
                </div>
                <div class="form-group">
                    <label for="zip_code">zip_code:</label>
                    <input type="number" class="form-control" id="zip_code" name="zip_code" placeholder="Suplier City">
                </div>
                <div class="form-group">
                    <label for="region">region:</label>
                    <input type="text" class="form-control" id="region" name="region" placeholder="Suplier Country">
                </div>
                <div class="form-group">
                    <label for="city">city:</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Suplier Country">
                </div>
                <div class="form-group">
                    <label for="country">country:</label>
                    <input type="text" class="form-control" id="country" name="country" placeholder="Suplier Country">
                </div>
                <div class="form-group">
                    <label for="contact_title">contact_title:</label>
                    <input type="text" class="form-control" id="contact_title" name="contact_title" placeholder="Suplier Country">
                </div>
                <div class="form-group">
                    <label for="contact_name">contact_name:</label>
                    <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Suplier Country">
                </div>
                <div class="form-group">
                    <label for="contact_phone">contact_phone:</label>
                    <input type="number" class="form-control" id="contact_phone" name="contact_phone" placeholder="Suplier Country">
                </div>
                <div class="form-group">
                    <label for="contact_fax">contact_fax:</label>
                    <input type="text" class="form-control" id="contact_fax" name="contact_fax" placeholder="Suplier Country">
                </div>
                <div class="form-group">
                    <label for="contact_email">contact_email:</label>
                    <input type="email" class="form-control" id="contact_email" name="contact_email" placeholder="Suplier Country">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
        </div>
        <!-- container-->
    </section>
    <!-- /.main-section -->
@endsection