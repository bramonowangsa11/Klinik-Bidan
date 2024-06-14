@extends('layouts.bootstrap')
@section('content')
    <style>
        @media print {
            .page {
                page-break-after: always;
            }
        }
    </style>

    <div class="d-flex">

        {{-- isi konten nya disini --}}
        <div class="content flex-grow-1 p-2" style="width: 47vh">
            <div class="row">
                <div class="col-12 page">
                    <h5>Halaman 1</h5>
                    <table class="table table-responsive table-sm table-bordered table-striped border-black">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Buku KIA</th>
                                <th>Nama Ibu</th>
                                <th>NIK Ibu</th>
                                <th>Tgl Lahir Ibu</th>
                                <th>Umur Ibu</th>
                                <th>Pendidikan Ibu</th>
                                <th>Pekerjaan Ibu</th>
                                <th>Nama Suami</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>

                    </table>
                </div>
                {{-- halaman 2 --}}
                <div class="col-12 page">
                    <h5>Halaman 2</h5>
                    <table class="table table-responsive table-sm table-bordered table-striped border-black">
                        <thead>
                            <tr>
                                <th>NIK Suami</th>
                                <th>No KK</th>
                                <th>Alamat</th>
                                <th>Paritas</th>
                                <th>Spasing</th>
                                <th>P4K/Rencana Kelahiran</th>
                                <th>HPHT</th>
                                <th>HPL</th>
                                <th>Umur Kehamilan (Minggu)</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>

                    </table>
                </div>
                {{-- halaman 3 --}}
                <div class="col-12 page">
                    <h5>Halaman 3</h5>
                    <table class="table table-responsive table-sm table-bordered table-striped border-black">
                        <thead>
                            <tr>
                                <th>Anamesa Kehamilan</th>
                                <th>Tinggi Badan</th>
                                <th>LILA</th>
                                <th>Berat Badan</th>
                                <th>TFU</th>
                                <th>Tensi</th>
                                <th>Status TT K1</th>
                                <th>TM/K1/K4</th>
                                <th>FE1/FE2/FE3</th>
                            </tr>

                        </thead>
                        <tbody>
                            

                        </tbody>

                    </table>
                </div>
                {{-- Halaman 4 --}}
                <div class="col-12 page">
                    <h5>Halaman 4</h5>
                    <table class="table table-responsive table-sm table-bordered table-striped border-black">
                        <thead>
                            <tr>
                                <th>BAT Lain</th>
                                <th>Presentasi</th>
                                <th>DJJ</th>
                                <th>Kepala THD PAP</th>
                                <th>TBJ</th>
                                <th>HB</th>
                                <th>Protein Urine</th>
                                <th>Golongan Darah</th>
                                <th>HBsAG</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($ancs as $key => $anc)
                                <tr>
                                    <td>{{ $ancs->BAT_LAIN }}</td>
                                    <td>{{ $ancs->PRESENTASI }}</td>
                                    <td>{{ $ancs->DJJ }}</td>
                                    <td>{{ $ancs->KEPALA_THD_PAP }}</td>
                                    <td>{{ $ancs->TBJ }}</td>
                                    <td>{{ $ancs->HB }}</td>
                                    <td>{{ $ancs->Protein_urine }}</td>
                                    <td>{{ $ancs->GOLDAR }}</td>
                                    <td>{{ $ancs->HBSAG }}</td>
                                </tr>
                            @endforeach --}}
                        </tbody>

                    </table>
                </div>
                {{-- Halaman 5 --}}
                <div class="col-12 page">
                    <h5>Halaman 5</h5>
                    <table class="table table-responsive table-sm table-bordered table-striped border-black">
                        <thead>
                            <tr>
                                <th>IMS</th>
                                <th>HIV</th>
                                <th>Komplikasi</th>
                                <th>Rujuk Ke</th>
                                <th>Trimester 1</th>
                                <th>Trimester 2</th>
                                <th>Trimester 3</th>
                                <th>FR/R</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($ancs as $key => $anc)
                                <tr>
                                    <td>{{ $ancs->IMS }}</td>
                                    <td>{{ $ancs->HIV }}</td>
                                    <td>{{ $ancs->KOMPLIKASI }}</td>
                                    <td>{{ $ancs->RUJUK }}</td>
                                    <td>{{ $ancs->trisemester1 }}</td>
                                    <td>{{ $ancs->trisemester2 }}</td>
                                    <td>{{ $ancs->trisemester3 }}</td>
                                    <td>{{ $ancs->FR }}</td>
                                    <td>{{ $ancs->keterangan }}</td>
                                </tr>
                            @endforeach --}}
                        </tbody>

                    </table>
                </div>
            </div>
            {{-- bagian tabel --}}

        </div>
        {{-- end konten --}}
    </div>
