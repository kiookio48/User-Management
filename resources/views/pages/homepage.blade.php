@extends('template')

@section('main')
    <div id="homepage">
        <h2>Selamat Datang aplikasi management PT Usaha Desa</h2>
        <p>Dengan ini modul Laravel sebagai bahan test bagi calon karyawan pegawai, berikut modul/fitur berikut<br>
		   <ul>
				<li>User Role/Level</li>
				<li>Penerapan database migration & Relationship</li>
				<li>Penggunaan automation(task scheduler & queue)</li>
				<li>Mail notification</li>
				<li>CRUD User</li>
		   </ul>
		</p>
    </div>
@stop

@section('footer')
    @include('footer')
@stop