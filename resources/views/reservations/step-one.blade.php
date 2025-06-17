<x-guest-layout>

    <!-- ------------------------   Reservation Step One Form Section ------------------------ -->
    <section class="my-5">
        <div class="container">
            <div class="row my-4 mx-1">
                <div
                    class="
                col-md-12
                mx-auto
                bg-primary
                text-white
                p-md-5 p-4
                shadow-lg
                rounded-3
              ">
                    <div class="text-center">
                        <h1 class="fw-bold">Isi Data Diri Anda</h1>
                        <p>Isi form dibawah dengan benar untuk menyelesaikan di pesanan anda</p>
                    </div>
                    <hr />
                    <form method="POST" action="{{ route('reservations.store.step.one') }}" class="row g-3">
                        @csrf
                        <div class="">
                            <label for="nama_depan_input" class="form-label">Nama Lengkap</label>
                            <input type="text" name="first_name" value="{{ $reservation->first_name ?? '' }}"
                                placeholder="Masukkan nama depan anda" class="form-control" id="nama_depan_input" />
                            @error('first_name')
                                <p class="register_text_error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="">
                            <label for="nomor_telepon_input" class="form-label">Nomor Telepon</label>
                            <input type="number" name="tel_number" value="{{ $reservation->tel_number ?? '' }}"
                                placeholder="Masukkan nomor telepon anda" class="form-control"
                                id="nomor_telepon_input" />
                            @error('tel_number')
                                <p class="register_text_error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-12 mx-auto mt-4 text-center">
                            <p class="text-center col-md-8 mx-auto">
                                Tahap selanjutnya adalah menyelesaikan pesanan anda
                            </p>
                            <button type="submit" class="btn btn-outline-light text-white px-5 py-2 fw-bold">
                                Selanjutnya &nbsp; <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>
