@extends('layouts.app(sumbang)')
@if($sumbangan->count() > 0)
                    <table>
                        <tr class="tabledb">
                            <th>Nama Penyumbang</th>
                            <th>Judul Buku</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Edit</th>
                        </tr>

                        @foreach($sumbangan as $buku)
                            <tr class="tabledb">
                                <td>{{ $buku->nama_penyumbang }}</td>
                                <td>{{ $buku->judul_buku }}</td>
                                <td>{{ $buku->pengarang }}</td>
                                <td>{{ $buku->penerbit }}</td>
                                <td><button type="button" class="btn btn-warning edit-btn" onclick="window.location= '{{ route('Sumbang.edit', ['id' => $buku->id]) }}'">Edit</button></td>
                            </tr>
                        @endforeach

                    </table>
                    <form action="{{ route('Sumbang.show') }}" method="get">
                    @csrf
                        <div class="submit-button-rectangle index-btn">
                            <input class="btn btn-primary submit-button-rectangle" type="submit" value="Submit">
                        </div>
                    </form>
                @else
                    <p class="index-text">Anda belum mengisi detail buku.</p>
                @endif
