<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link {{ Route::is('admin.index') ? 'active' : '' }}" id="listagem-produtos-tab" data-bs-toggle="tab" data-bs-target="#listagem-produtos" type="button" role="tab" aria-controls="listagem-produtos" aria-selected="true">
          Listagem de produtos
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="usuarios-tab" data-bs-toggle="tab" data-bs-target="#usuarios" type="button" role="tab" aria-controls="usuarios" aria-selected="false">Usuários</button>
    </li>
    {{-- <li class="nav-item" role="presentation">
      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
    </li> --}}
</ul>
