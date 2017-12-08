<div class="css-treeview">
    <ul>
        <li>
            <input type="checkbox" id="item-0" /><label for="item-0">Entire Organisation</label>

            <ul>
                <li>
                    @foreach($regions as $region)
                        <ul>
                            <li>
                                <input type="checkbox" id="item-0-0" /><label for="item-0-0">{{$region->name}}</label>
                                @foreach($departments  as $department)
                                <ul>
                                    <li>
                                    @if($region->id == $department->regionId)
                                        <ul>
                                            <li>
                                                <input type="checkbox" id="item-0-0-0" /><label for="item-0-0-0">{{$department->name}}</label>
                                            </li>
                                        </ul>
                                        @else
                                            <ul>
                                                <li class="hidden">
                                                    <input type="checkbox" class="hidden" id="item-0-0-0" /><label for="item-0-0-0">{{$department->name}}</label>
                                                </li>
                                            </ul>
                                        @endif
                                    </li>
                                </ul>
                                @endforeach
                            </li>
                        </ul>
                    @endforeach

                </li>
            </ul>

        </li>
        <li><input type="checkbox" id="item-1" checked="checked" /><label for="item-1">This One is Open by Default...</label>
            <ul>
                <li><input type="checkbox" id="item-1-0" /><label for="item-1-0">And Contains More Nested Items...</label>
                    <ul>
                        <li><a href="./">Look Ma - No Hands</a></li>
                        <li><a href="./">Another Item</a></li>
                        <li><a href="./">And Yet Another</a></li>
                    </ul>
                </li>
                <li><a href="./">Lorem</a></li>
                <li><a href="./">Ipsum</a></li>
                <li><a href="./">Dolor</a></li>
                <li><a href="./">Sit Amet</a></li>
            </ul>
        </li>
        <li>
            <input type="checkbox" id="item-2" /><label for="item-2">Can You Believe...</label>
            <ul>
                <li>
                    <input type="checkbox" id="item-2-0" /><label for="item-2-0">That This Treeview...</label>
                    <ul>
                        <li><input type="checkbox" id="item-2-2-0" /><label for="item-2-2-0">Does Not Use Any JavaScript...</label>
                            <ul>
                                <li><a href="./">But Relies Only</a></li>
                                <li><a href="./">On the Power</a></li>
                                <li><a href="./">Of CSS3</a></li>
                            </ul>
                        </li>
                        <li><a href="./">Item 1</a></li>
                        <li><a href="./">Item 2</a></li>
                        <li><a href="./">Item 3</a></li>
                    </ul>
                </li>
                <li><input type="checkbox" id="item-2-1" /><label for="item-2-1">This is a Folder With...</label>
                    <ul>
                        <li><a href="./">Some Nested Items...</a></li>
                        <li><a href="./">Some Nested Items...</a></li>
                        <li><a href="./">Some Nested Items...</a></li>
                        <li><a href="./">Some Nested Items...</a></li>
                        <li><a href="./">Some Nested Items...</a></li>
                    </ul>
                </li>
                <li><input type="checkbox" id="item-2-2" disabled="disabled" /><label for="item-2-2">Disabled Nested Items</label>
                    <ul>
                        <li><a href="./">item</a></li>
                        <li><a href="./">item</a></li>
                        <li><a href="./">item</a></li>
                        <li><a href="./">item</a></li>
                        <li><a href="./">item</a></li>
                        <li><a href="./">item</a></li>
                        <li><a href="./">item</a></li>
                        <li><a href="./">item</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>