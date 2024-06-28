<div id="product-list" class="w-full grid grid-cols-3 gap-4">
    @foreach($products->get() as $prod)
    <div class="relative rounded-lg overflow-hidden bg-gray-200 shadow-lg transform hover:scale-105 transition-transform duration-300" id="product-{{ $prod->id }}">
        <img src="{{ $prod->imgUrl }}" alt="{{ $prod->name }}" class="w-full h-auto">
        <div class="absolute inset-0 flex flex-col justify-end p-4 bg-black bg-opacity-50 transition-opacity opacity-0 hover:opacity-100">
            <h3 class="text-2xl text-white">{{ $prod->name }}</h3>
            <div class="italic text-gray-300 mb-2">{{ $prod->description }}</div>
            <div class="text-4xl text-green-300 mb-4">₱ {{ $prod->price }}.00</div>
            <div class="flex justify-center">
                <button hx-get="/api/products/{{ $prod->id }}/edit"
                        hx-target="#edit-product-modal"
                        hx-swap="innerHTML"
                        class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600"
                        onclick="showEditModal()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                      <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                    </svg>
                </button>
                <button hx-delete="/api/products/{{ $prod->id }}"
                        hx-target="#product-{{ $prod->id }}"
                        hx-swap="delete"
                        hx-confirm="Are you sure you want to delete this product?"
                        class="ml-2 px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                      <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div id="imgUrl_Error" hx-swap-oob="true"></div>
<div id="name_Error" hx-swap-oob="true"></div>
<div id="description_Error" hx-swap-oob="true"></div>
<div id="price_Error" hx-swap-oob="true"></div>
<div id='addMessage' hx-swap-oob='true'>
    <div class='bg-green-200 text-center text-green-800 p-3 rounded'>
        The Product has been added successfully.
    </div>
</div>

<script>
    function showEditModal() {
        document.getElementById('edit-product-modal').classList.remove('hidden');
    }
</script>

<script src="https://unpkg.com/htmx.org@1.9.12"></script>
