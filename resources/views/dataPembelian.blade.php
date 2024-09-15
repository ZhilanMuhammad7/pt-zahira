@extends('master')
@section('content')
<section class="section">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
                Data Pembelian
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
                        <th>Unit</th>
                        <th>Harga Satuan</th>
                        <th>Jumlah</th>
                        <th>Tanggal</th>
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
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Susu Zee</td>
                        <td>500</td>
                        <td>RP20000</td>
                        <td>7</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Permen Karet</td>
                        <td>76278</td>
                        <td>RP20000</td>
                        <td>7</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection