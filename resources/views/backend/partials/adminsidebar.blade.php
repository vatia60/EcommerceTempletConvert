<div class="categories-menu mrg-xs">
    <div class="category-heading">
       <h3> Browse Categories</h3>
    </div>
    <div class="category-menu-list">
        <ul>
            <li><a href="#"><img alt="" src="{{ asset('public') }}/images//icons/thum2.png"> Category <i class="zmdi zmdi-chevron-right"></i></a>
                <div class="category-menu-dropdown">
                    <div class="category-part-1 category-common mb--30">
                        <ul>
                            <li><a href="{{ route('category.create') }}"> Create Category</a></li>
                            <li><a href="{{ route('category.index') }}"> Show Category</a></li>
                        </ul>
                    </div>

                </div>
            </li>
            <li><a href="#"><img alt="" src="{{ asset('public') }}/images//icons/thum3.png"> Product <i class="zmdi zmdi-chevron-right"></i></a>
                <div class="category-menu-dropdown">
                    <div class="category-part-1 category-common2 mb--30">

                        <ul>
                            <li><a href="{{ route('product.create') }}"> Create Product</a></li>
                            <li><a href="{{ route('product.index') }}"> Show Product</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
</div>
<!-- End Left Feature -->
