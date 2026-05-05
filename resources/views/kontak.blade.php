@extends ('app')

@section('title', 'Kontak')

@section('content' )

<div style="
     max-width:500px;
     margin:auto;
     border-radius:15px;
     padding:20px;
     background:linear-gradient(135deg, #43b7fa, #c02915a2);
     color:black;
     box-shadow:0 4px 10px rgba(0, 0, 0, 8.59);">

    <p style="text-align:center;"><b>Hubungi Saya!</b></p>
    <hr>
    <div style="display:flex; align-items:center; gap:20px;">

        <div class="contact-box">
    <div class="contact-item">
        <span>Email:</span>
    <a href="mailto:241230002@unmuhpnk.ac.id">241230002@unmuhpnk.ac.id</a>
    </div>
    <div class="contact-item">
        <span>No. HP:</span>
        <a href="tel:081256923960">081256923960</a>
    </div>
</div>

@endsection