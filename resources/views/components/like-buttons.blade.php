<div class="flex">
    <form action="/tweets/{{ $tweet->id }}/like" method="POST">
        @csrf
        <div class="flex items-center mr-4  text-gray-500  text-gray-500">
            <svg viewBox="0 0 20 20" class="mr-1 w-3">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g class="fill-current">
                        <path
                            d="M11.0010436,0 C9.89589787,0 9.00000024,0.886706352 9.000002,1 1.99810135 L9,8 L1.9973917,8 C0.894262725,8 0,8.88772964 0,10 L0,12 L2.29663334,91"></path>
                    </g>
                </g>
            </svg>
            <button type="submit" class="text-xs text-gray-500">{{ $tweet->likes ?: 0 }}</button>
        </div>
    </form>
    <form action="/tweets/{{ $tweet->id }}/like" method="POST">
        @csrf
        @method('DELETE')
        <div
            class="flex items-center text-gray-500 text-gray-500">
            <svg viewBox="0 0 20 20" class="mr-1 w-3">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="fill-current">
                        <path
                            d="M11.0010436,0 C9.89589787,0 9.00000024,0.886706352 9.000002,1 1.99810135 L9,8 L1.9973917,8 C0.894262725,8 0,8.88772964 0,10 L0,12 L2.29663334,91"></path>
                    </g>
                </g>
            </svg>
            <button type="submit" class="text-xs text-gray-500">{{ $tweet->dislikes ?: 0 }}</button>
        </div>
    </form>
</div>
