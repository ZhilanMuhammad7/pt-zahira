@extends('master')
@section('content')
<section class="section">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
                Data Barang
            </h5>
            <!-- <div style="float: right;">
                <a href="#" class="btn icon icon-left btn-primary"><i data-feather="edit"></i> Primary</a>
            </div> -->
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Suplier</th>
                        <th>Nama Barang</th>
                        <th>Stock</th>
                        <th>Harga</th>
                        <th>ROP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Susu Coklat</td>
                        <td>2000</td>
                        <td>RP20000</td>
                        <td>7</td>
                        <td></td>
                        <td>
                            <div>
                                <a href="#" class="btn icon btn-primary"><i class="bi bi-pencil"></i></a>
                                <a href="#" class="btn icon btn-danger"><i class="bi bi-x"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Susu Zee</td>
                        <td>500</td>
                        <td>RP20000</td>
                        <td>7</td>
                        <td></td>
                        <td>
                            <div>
                                <a href="#" class="btn icon btn-primary"><i class="bi bi-pencil"></i></a>
                                <a href="#" class="btn icon btn-danger"><i class="bi bi-x"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Permen Karet</td>
                        <td>76278</td>
                        <td>RP20000</td>
                        <td>7</td>
                        <td></td>
                        <td>
                            <div>
                                <a href="#" class="btn icon btn-primary"><i class="bi bi-pencil"></i></a>
                                <a href="#" class="btn icon btn-danger"><i class="bi bi-x"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection