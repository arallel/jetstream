<title>Cars </title>
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
          <h4 class="card-title text-center">Cars Table</h4>
          <button wire:click="create()"
          class="btn btn-info text-center">create</button>
        </div>
        {{-- <button wire:click="create()"
          class="btn btn-info">create</button> --}}
        @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
     @endif
        @if($bukacreate)
          @include('livewire.inputcar')
        @endif
        @if($ModalOpen)
        @include('livewire.detailkendaraan')
        @endif
        @if($bukaedit)
        @include('livewire.editcar')
        @endif
        <?php $i = 0; ?>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                  <th>No</th>
                  <th>Merk Kendaraan</th>
                  <th>Warna</th>
                  <th class="text-center">Plat kendaraan</th>
                  <th class="text-center">Photo</th>
                  <th>Qr code</th>
                  <th>Detail</th>
                 
              </tr>
              </thead>
              <tbody>
                @foreach ($cars as $car)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $car->merkkendaraan }}</td> 
                    <td>{{ $car->warna }}</td>
                    <td class="text-center">{{ $car->platmobil }}</td>
                    <td class="text-center"><img src="{{ asset('storage/' . $car->filecar) }}" width="150" height="100"></td>
                    <td><img src="data:image/png;base64,{!! base64_encode( QrCode::size(100)->format('png')->generate($car->id.$car->warna.$car->nostnk.$car->nobpkb.$car->merkkendaraan.$car->bahanbakar.$car->platkendaraan)) !!}"></td>
                    <td><button wire:click="show({{ $car->id }})"
                      class="btn btn-info"><i class="fa-solid fa-eye"></i></button> 
                      <button wire:click="edit({{ $car->id }})"
                        class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button wire:click="delete({{ $car->id }})"
                          class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div> 
  </div> 
  
  