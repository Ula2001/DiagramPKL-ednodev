@extends('layouts.biasa')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="container">
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Suplier</h1>
            <hr>
            <form action="{{ url('/suplier/update', array($suplier->id)) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">name:</label>
                    <input type="text" value="{{$suplier->name}}" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="address">address:</label>
                    <input type="text" value="{{$suplier->address}}" class="form-control" id="address" name="address">
                </div>
                <div class="form-group">
                    <label for="postal_code">postal_code :</label>
                    <input type="number" value="{{$suplier->postal_code}}" class="form-control" id="postal_code" name="postal_code">
                </div>
                <div class="form-group">
                    <label for="zip_code">zip_code :</label>
                    <input type="number" value="{{$suplier->zip_code}}" class="form-control" id="zip_code" name="zip_code">
                </div>
                <div class="form-group">
                    <label for="region">region :</label>
                    <input type="text" value="{{$suplier->region}}" class="form-control" id="region" name="region">
                </div>
                <div class="form-group">
                    <label for="city">city :</label>
                    <input type="text" value="{{$suplier->city}}" class="form-control" id="city" name="city">
                </div>
                <div class="form-group">
                    <label for="country">country :</label>
                    <input type="text" value="{{$suplier->country}}" class="form-control" id="country" name="country">
                </div>
                <div class="form-group">
                    <label for="contact_title">contact_title :</label>
                    <input type="text" value="{{$suplier->contact_title}}" class="form-control" id="contact_title" name="contact_title">
                </div>
                <div class="form-group">
                    <label for="contact_name">contact_name :</label>
                    <input type="text" value="{{$suplier->contact_name}}" class="form-control" id="contact_name" name="contact_name">
                </div>
                <div class="form-group">
                    <label for="contact_phone">contact_phone :</label>
                    <input type="number" value="{{$suplier->contact_phone}}" class="form-control" id="contact_phone" name="contact_phone">
                </div>
                <div class="form-group">
                    <label for="contact_fax">contact_fax :</label>
                    <input type="text" value="{{$suplier->contact_fax}}" class="form-control" id="contact_fax" name="contact_fax">
                </div>
                <div class="form-group">
                    <label for="contact_email">contact_email :</label>
                    <input type="email" value="{{$suplier->contact_email}}" class="form-control" id="contact_email" name="contact_email">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
    </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection