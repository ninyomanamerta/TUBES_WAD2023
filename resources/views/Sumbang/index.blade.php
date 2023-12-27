@if($sumbangan->count() > 0)
                    <table style="border:1">
                        <tr style="border:1">
                            <th>Judul Buku</th>
                            <th>Nama Penyumbang</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Sinopsis Buku</th>
                            <th>Tahun Terbit</th>
                            <th>Genre</th>
                            <th>AKSI</th>
                        </tr>

                        @foreach($sumbangan as $buku)
                            <tr>
                                <td>{{ $buku->judul_buku }}</td>
                                <td>{{ $buku->nama_penyumbang }}</td>
                                <td>{{ $buku->pengarang }}</td>
                                <td>{{ $buku->penerbit }}</td>
                                <td>{{ $buku->sinopsis_buku }}</td>
                                <td>{{ $buku->tahun_terbit }}</td>
                                <td>{{ $buku->genre }}</td>
                                <td>Your Actions Here</td> <!-- Replace with your actions column -->
                            </tr>
                        @endforeach

                    </table>
                @else
                    <p>No books found.</p>
                @endif
