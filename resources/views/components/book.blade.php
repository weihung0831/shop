<section class="book_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Book A Table
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form_container">
                    <form action="{{ route('Book.store') }}" method="post">
                        @csrf
                        <div>
                            <input type="text" name="name" class="form-control" placeholder="Your Name" />
                        </div>
                        <div>
                            <input type="text" name="phone" class="form-control" placeholder="Phone Number" />
                        </div>
                        <div>
                            <input type="email" name="email" class="form-control" placeholder="Your Email" />
                        </div>
                        <div>
                            <select name="total_population" class="form-control nice-select wide">
                                <option value="" disabled selected>
                                    How many persons?
                                </option>
                                <option value="2">
                                    2
                                </option>
                                <option value="3">
                                    3
                                </option>
                                <option value="4">
                                    4
                                </option>
                                <option value="5">
                                    5
                                </option>
                            </select>
                        </div>
                        <div>
                            <input type="date" name="date" class="form-control">
                        </div>
                        <br>
                        <div class="btn_box">
                            <button type="submit">
                                Book Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="map_container ">
                    <div id="googleMap"></div>
                </div>
            </div>
        </div>
    </div>
</section>
