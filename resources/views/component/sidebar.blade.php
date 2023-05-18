
<div class="w-full h-14 p-2">
    <div class="flex justify-between items-center bg-gray-700 h-full p-1 rounded">
        <button class="h-full" style="width : 10%">
            <span>
                <svg  viewBox="0 0 24 24" height="30px" width="30px" preserveAspectRatio="xMidYMid meet" class="fill-gray-300 text-gray-300" version="1.1" x="0px" y="0px" enable-background="new 0 0 24 24" xml:space="preserve"><path fill="currentColor" d="M15.009,13.805h-0.636l-0.22-0.219c0.781-0.911,1.256-2.092,1.256-3.386 c0-2.876-2.332-5.207-5.207-5.207c-2.876,0-5.208,2.331-5.208,5.207s2.331,5.208,5.208,5.208c1.293,0,2.474-0.474,3.385-1.255 l0.221,0.22v0.635l4.004,3.999l1.194-1.195L15.009,13.805z M10.201,13.805c-1.991,0-3.605-1.614-3.605-3.605 s1.614-3.605,3.605-3.605s3.605,1.614,3.605,3.605S12.192,13.805,10.201,13.805z"></path></svg>
            </span>
        </button>
        <input class="h-full bg-gray-700 pl-2 placeholder:text-gray-200 focus:outline-none text-gray-300 font-medium placeholder:font-light" placeholder="Search contact" style="width : 90%" type="text"  id="search">
    </div>
</div>


<ul id="contact" class="w-full p-0 m-0 overflow-y-scroll" style="height : 84%;">

    @include('component.contact')


</ul>