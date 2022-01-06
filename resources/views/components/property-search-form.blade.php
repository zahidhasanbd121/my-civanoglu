<form action="{{route('properties')}}" method="GET" class="flex justify-between">
                    
    <div class="flex w-7/12 justify-between items-center">
        <div class="flex flex-col mx-3">
            <select name="sale" class="focus:ring-0">
                <option value="">Buy or Rent</option>
                <option value="1">Buy</option>
                <option value="0">Rent</option>
            </select>
        </div>
        <div class="py-3 self-center border-gray-500 border"></div>
        <div class="flex flex-col mx-3">
            <select name="type" class="border-0 focus:ring-0">
                <option value="">Type</option>
                <option value="0">Land</option>
                <option value="1">Apartment</option>
                <option value="2">Villa</option>
            </select>
        </div>
        <div class="py-3 self-center border-gray-500 border"></div>
        <div class="flex flex-col mx-3">
            <select name="price" class="border-0 focus:ring-0">
                <option value="">Price</option>
                <option value="100000">10000 - 100000</option>
                <option value="200000">100000 - 200000</option>
                <option value="300000">200000 - 300000</option>
                <option value="400000">300000 - 400000</option>
                <option value="400000">400000 - 500000</option>
                <option value="500000+">500000+</option>
            </select>
        </div>
        <div class="py-3 self-center border-gray-500 border"></div>
        <div class="flex flex-col mx-3">
            <select name="bedrooms"class="border-0 focus:ring-0">
                <option value="">Bedrooms</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
        </div>
    </div>
    <div class="flex justify-between items-center w-5/12 ml-5">
        <input type="search" placeholder="Try to search for something" class="rounded-lg px-4 py-2 w-full mr-4 focus:border-gray-700 focus:ring-0">
        <button type="submit" class="btn">Search</button>
    </div>
</form>