<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage travelcream
 */
get_header(); // подключаем header.php ?>
    <section id="flights" class="pt-5 pb-5 section">
        <div class="container">
            <div class="row">
                <div class="col-12 title">
                    <div class="align-middle">
                        <h3 class="pb-3">Flights</h3>
                        <div class="float-right">
                            <span class="active"><a href="javascript:void(0);">Schedule</a></span>
                            <span><a href="javascript:void(0);">Airline</a></span>
                            <span><a href="javascript:void(0);">Best Price</a></span>
                            <span><a href="javascript:void(0);">None stop</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col" class="text-center">Airline</th>
                            <th scope="col" class="text-center">Date</th>
                            <th scope="col" class="text-center">Departure</th>
                            <th scope="col" class="text-center">Arrival</th>
                            <th scope="col" class="text-center">Time</th>
                            <th scope="col" class="text-center">Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th class="first-cell align-middle pt-4 pb-4 text-center">
                                <span class="align-middle text-center"><img
                                            src="/wp-content/themes/travelcream/img/vueling.png"/></span>
                                <span class="pl-3 align-middle text-center">
                                    <div class="main-cell">Vueling</div>
                                    <div class="sub-cell pt-2">V06795</div>
                                </span>
                            </th>
                            <td class="align-middle pt-4 pb-4">
                                <span class="align-middle text-center">
                                    <div class="main-cell">03/11/12</div>
                                    <div class="sub-cell pt-2">In 3 days</div>
                                </span>
                            </td>
                            <td class="align-middle pt-4 pb-4">
                                <span class="align-middle text-center">
                                    <div class="main-cell">Paris (GDF)</div>
                                    <div class="sub-cell pt-2">07:15</div>
                                </span>
                            </td>
                            <td class="align-middle pt-4 pb-4">
                                <span class="align-middle text-center">
                                    <div class="main-cell">Miami</div>
                                    <div class="sub-cell pt-2">5:00</div>
                                </span>
                            </td>
                            <td class="align-middle pt-4 pb-4">
                                <span class="align-middle text-center">
                                    <div class="main-cell">08:45</div>
                                    <div class="sub-cell pt-2">CDG - MIA</div>
                                </span>
                            </td>
                            <td class="align-middle pt-4 pb-4 text-center">
                                <a href="javascript:void(0);" class="btn btn-outline-danger cell-price ">1000$</a>
                            </td>
                        </tr>
                        <tr>
                            <th class="first-cell align-middle pt-4 pb-4 text-center">
                                <span class="align-middle text-center"><img
                                            src="/wp-content/themes/travelcream/img/vueling.png"/></span>
                                <span class="pl-3 align-middle text-center">
                                    <div class="main-cell">Vueling</div>
                                    <div class="sub-cell pt-2">V06795</div>
                                </span>
                            </th>
                            <td class="align-middle pt-4 pb-4">
                                <span class="align-middle text-center">
                                    <div class="main-cell">03/11/12</div>
                                    <div class="sub-cell pt-2">In 3 days</div>
                                </span>
                            </td>
                            <td class="align-middle pt-4 pb-4">
                                <span class="align-middle text-center">
                                    <div class="main-cell">Paris (GDF)</div>
                                    <div class="sub-cell pt-2">07:15</div>
                                </span>
                            </td>
                            <td class="align-middle pt-4 pb-4">
                                <span class="align-middle text-center">
                                    <div class="main-cell">Miami</div>
                                    <div class="sub-cell pt-2">5:00</div>
                                </span>
                            </td>
                            <td class="align-middle pt-4 pb-4">
                                <span class="align-middle text-center">
                                    <div class="main-cell">08:45</div>
                                    <div class="sub-cell pt-2">CDG - MIA</div>
                                </span>
                            </td>
                            <td class="align-middle pt-4 pb-4 text-center">
                                <a href="javascript:void(0);" class="btn btn-outline-danger cell-price ">1000$</a>
                            </td>
                        </tr>
                        <tr>
                            <th class="first-cell align-middle pt-4 pb-4 text-center">
                                <span class="align-middle text-center"><img
                                            src="/wp-content/themes/travelcream/img/vueling.png"/></span>
                                <span class="pl-3 align-middle text-center">
                                    <div class="main-cell">Vueling</div>
                                    <div class="sub-cell pt-2">V06795</div>
                                </span>
                            </th>
                            <td class="align-middle pt-4 pb-4">
                                <span class="align-middle text-center">
                                    <div class="main-cell">03/11/12</div>
                                    <div class="sub-cell pt-2">In 3 days</div>
                                </span>
                            </td>
                            <td class="align-middle pt-4 pb-4">
                                <span class="align-middle text-center">
                                    <div class="main-cell">Paris (GDF)</div>
                                    <div class="sub-cell pt-2">07:15</div>
                                </span>
                            </td>
                            <td class="align-middle pt-4 pb-4">
                                <span class="align-middle text-center">
                                    <div class="main-cell">Miami</div>
                                    <div class="sub-cell pt-2">5:00</div>
                                </span>
                            </td>
                            <td class="align-middle pt-4 pb-4">
                                <span class="align-middle text-center">
                                    <div class="main-cell">08:45</div>
                                    <div class="sub-cell pt-2">CDG - MIA</div>
                                </span>
                            </td>
                            <td class="align-middle pt-4 pb-4 text-center">
                                <a href="javascript:void(0);" class="btn btn-outline-danger cell-price ">1000$</a>
                            </td>
                        </tr>
                        <tr>
                            <th class="first-cell align-middle pt-4 pb-4 text-center">
                                <span class="align-middle text-center"><img
                                            src="/wp-content/themes/travelcream/img/vueling.png"/></span>
                                <span class="pl-3 align-middle text-center">
                                    <div class="main-cell">Vueling</div>
                                    <div class="sub-cell pt-2">V06795</div>
                                </span>
                            </th>
                            <td class="align-middle pt-4 pb-4">
                                <span class="align-middle text-center">
                                    <div class="main-cell">03/11/12</div>
                                    <div class="sub-cell pt-2">In 3 days</div>
                                </span>
                            </td>
                            <td class="align-middle pt-4 pb-4">
                                <span class="align-middle text-center">
                                    <div class="main-cell">Paris (GDF)</div>
                                    <div class="sub-cell pt-2">07:15</div>
                                </span>
                            </td>
                            <td class="align-middle pt-4 pb-4">
                                <span class="align-middle text-center">
                                    <div class="main-cell">Miami</div>
                                    <div class="sub-cell pt-2">5:00</div>
                                </span>
                            </td>
                            <td class="align-middle pt-4 pb-4">
                                <span class="align-middle text-center">
                                    <div class="main-cell">08:45</div>
                                    <div class="sub-cell pt-2">CDG - MIA</div>
                                </span>
                            </td>
                            <td class="align-middle pt-4 pb-4 text-center">
                                <a href="javascript:void(0);" class="btn btn-outline-danger cell-price">1000$</a>
                            </td>
                        </tr>
                        <tr>
                            <th class="first-cell align-middle pt-4 pb-4 text-center">
                                <span class="align-middle text-center"><img
                                            src="/wp-content/themes/travelcream/img/vueling.png"/></span>
                                <span class="pl-3 align-middle text-center">
                                    <div class="main-cell">Vueling</div>
                                    <div class="sub-cell pt-2">V06795</div>
                                </span>
                            </th>
                            <td class="align-middle pt-4 pb-4">
                                <span class="align-middle text-center">
                                    <div class="main-cell">03/11/12</div>
                                    <div class="sub-cell pt-2">In 3 days</div>
                                </span>
                            </td>
                            <td class="align-middle pt-4 pb-4">
                                <span class="align-middle text-center">
                                    <div class="main-cell">Paris (GDF)</div>
                                    <div class="sub-cell pt-2">07:15</div>
                                </span>
                            </td>
                            <td class="align-middle pt-4 pb-4">
                                <span class="align-middle text-center">
                                    <div class="main-cell">Miami</div>
                                    <div class="sub-cell pt-2">5:00</div>
                                </span>
                            </td>
                            <td class="align-middle pt-4 pb-4">
                                <span class="align-middle text-center">
                                    <div class="main-cell">08:45</div>
                                    <div class="sub-cell pt-2">CDG - MIA</div>
                                </span>
                            </td>
                            <td class="align-middle pt-4 pb-4 text-center">
                                <a href="javascript:void(0);" class="btn btn-outline-danger cell-price ">1000$</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12">
                    <span class="float-right pt-2 pb-2">
                        <a class="see-all" href="javascript:void(0);">See all flights</a>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section id="hotels" class="pt-5 pb-5 section">
        <div class="container">
            <div class="row">
                <div class="col-12 title">
                    <div class="align-middle">
                        <h3 class="pb-3">Hotels</h3>
                        <div class="float-right">
                            <span class="active"><a href="javascript:void(0);">Schedule</a></span>
                            <span><a href="javascript:void(0);">None stop</a></span></div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row no-gutters">
                        <div class="col-12 card">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <img class="card-img" src="/wp-content/themes/travelcream/img/paris.jpg"/>
                                </div>
                                <div class="col-12">
                                    <div class="card-title">Hotel Paris</div>
                                </div>
                                <div class="col-6 text-left">
                                    <div class="card-subtitle">12km</div>
                                </div>
                                <div class="col-6 text-right">
                                    <div class="card-subtitle">Free Wi-Fi</div>
                                </div>
                                <div class="col-12">
                                    <a class="btn btn-danger card-btn">45$</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row no-gutters">
                        <div class="col-12 card">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <img class="card-img" src="/wp-content/themes/travelcream/img/paris.jpg"/>
                                </div>
                                <div class="col-12">
                                    <div class="card-title">Hotel Paris</div>
                                </div>
                                <div class="col-6 text-left">
                                    <div class="card-subtitle">12km</div>
                                </div>
                                <div class="col-6 text-right">
                                    <div class="card-subtitle">Free Wi-Fi</div>
                                </div>
                                <div class="col-12">
                                    <a class="btn btn-danger card-btn">45$</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row no-gutters">
                        <div class="col-12 card">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <img class="card-img" src="/wp-content/themes/travelcream/img/paris.jpg"/>
                                </div>
                                <div class="col-12">
                                    <div class="card-title">Hotel Paris</div>
                                </div>
                                <div class="col-6 text-left">
                                    <div class="card-subtitle">12km</div>
                                </div>
                                <div class="col-6 text-right">
                                    <div class="card-subtitle">Free Wi-Fi</div>
                                </div>
                                <div class="col-12">
                                    <a class="btn btn-danger card-btn">45$</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row no-gutters">
                        <div class="col-12 card">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <img class="card-img" src="/wp-content/themes/travelcream/img/paris.jpg"/>
                                </div>
                                <div class="col-12">
                                    <div class="card-title">Hotel Paris</div>
                                </div>
                                <div class="col-6 text-left">
                                    <div class="card-subtitle">12km</div>
                                </div>
                                <div class="col-6 text-right">
                                    <div class="card-subtitle">Free Wi-Fi</div>
                                </div>
                                <div class="col-12">
                                    <a class="btn btn-danger card-btn">45$</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row no-gutters">
                        <div class="col-12 card">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <img class="card-img" src="/wp-content/themes/travelcream/img/paris.jpg"/>
                                </div>
                                <div class="col-12">
                                    <div class="card-title">Hotel Paris</div>
                                </div>
                                <div class="col-6 text-left">
                                    <div class="card-subtitle">12km</div>
                                </div>
                                <div class="col-6 text-right">
                                    <div class="card-subtitle">Free Wi-Fi</div>
                                </div>
                                <div class="col-12">
                                    <a class="btn btn-danger card-btn">45$</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row no-gutters">
                        <div class="col-12 card">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <img class="card-img" src="/wp-content/themes/travelcream/img/paris.jpg"/>
                                </div>
                                <div class="col-12">
                                    <div class="card-title">Hotel Paris</div>
                                </div>
                                <div class="col-6 text-left">
                                    <div class="card-subtitle">12km</div>
                                </div>
                                <div class="col-6 text-right">
                                    <div class="card-subtitle">Free Wi-Fi</div>
                                </div>
                                <div class="col-12">
                                    <a class="btn btn-danger card-btn">45$</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <span class="float-right pt-2 pb-2">
                        <a class="see-all" href="javascript:void(0);">See all flights</a>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section id="activity" class="pt-5 pb-5 section">
        <div class="container">
            <div class="row">
                <div class="col-12 title">
                    <div class="align-middle">
                        <h3 class="pb-3">Activity</h3>
                        <div class="float-right">
                            <span><a href="javascript:void(0);">Schedule</a></span>
                            <span><a href="javascript:void(0);">Airline</a></span>
                            <span><a href="javascript:void(0);">Best Price</a></span>
                            <span><a href="javascript:void(0);">Best Price</a></span>
                            <span><a href="javascript:void(0);">Best Price</a></span>
                            <span><a href="javascript:void(0);">Best Price</a></span>
                            <span class="active"><a href="javascript:void(0);">None stop</a></span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 card-img">
                    <img src="/wp-content/themes/travelcream/img/paris.jpg"/>
                    <div class="text-on-image">Sample text</div>
                </div>
                <div class="col-12 col-md-8 card-img">
                    <div class="row">
                        <div class="col-12">
                            <img src="/wp-content/themes/travelcream/img/paris.jpg"/>
                            <div class="text-on-image">Sample text</div>
                        </div>
                        <div class="col-12">
                            <img src="/wp-content/themes/travelcream/img/paris.jpg"/>
                            <div class="text-on-image">Sample text</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 card-img">
                    <img src="/wp-content/themes/travelcream/img/paris.jpg"/>
                    <div class="text-on-image">Sample text</div>
                </div>
                <div class="col-12 col-md-4 card-img">
                    <img src="/wp-content/themes/travelcream/img/paris.jpg"/>
                    <div class="text-on-image">Sample text</div>
                </div>
                <div class="col-12 col-md-4 card-img">
                    <img src="/wp-content/themes/travelcream/img/paris.jpg"/>
                    <div class="text-on-image">Sample text</div>
                </div>
                <div class="col-12">
                    <span class="float-right pt-2 pb-2">
                        <a class="see-all" href="javascript:void(0);">See all flights</a>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section id="trips" class="pt-5 pb-5 section">
        <div class="container">
            <div class="row">
                <div class="col-12 title">
                    <div class="align-middle">
                        <h3 class="pb-3">Trips</h3>
                        <div class="float-right">
                            <span class="active"><a href="javascript:void(0);">Best Price</a></span>
                            <span><a href="javascript:void(0);">None stop</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12 card">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <img class="card-img-2" src="/wp-content/themes/travelcream/img/paris.jpg"/>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="tips-title font-weight-bold pt-2 pb-2">Title of text</div>
                            <div class="tips-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod sem quis viverra
                                condimentum. Nam mattis nisi imperdiet justo suscipit, et fringilla nisi eleifend. Sed
                                faucibus lorem quis ligula auctor faucibus. Nunc eu mauris sed purus mattis tempus eget
                                nec tellus. Curabitur congue id nisi quis ultrices. Maecenas in porttitor quam. Nullam
                                cursus erat eget felis egestas, vel ultrices ante ornare. Curabitur consectetur lacus
                                sed vestibulum venenatis. Integer placerat purus vestibulum, suscipit ante non,
                                vestibulum ligula.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 card">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <img class="card-img-2" src="/wp-content/themes/travelcream/img/paris.jpg"/>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="tips-title font-weight-bold pt-2 pb-2">Title of text</div>
                            <div class="tips-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod sem quis viverra
                                condimentum. Nam mattis nisi imperdiet justo suscipit, et fringilla nisi eleifend. Sed
                                faucibus lorem quis ligula auctor faucibus. Nunc eu mauris sed purus mattis tempus eget
                                nec tellus. Curabitur congue id nisi quis ultrices. Maecenas in porttitor quam. Nullam
                                cursus erat eget felis egestas, vel ultrices ante ornare. Curabitur consectetur lacus
                                sed vestibulum venenatis. Integer placerat purus vestibulum, suscipit ante non,
                                vestibulum ligula.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 card">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <img class="card-img-2" src="/wp-content/themes/travelcream/img/paris.jpg"/>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="tips-title font-weight-bold pt-2 pb-2">Title of text</div>
                            <div class="tips-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc euismod sem quis viverra
                                condimentum. Nam mattis nisi imperdiet justo suscipit, et fringilla nisi eleifend. Sed
                                faucibus lorem quis ligula auctor faucibus. Nunc eu mauris sed purus mattis tempus eget
                                nec tellus. Curabitur congue id nisi quis ultrices. Maecenas in porttitor quam. Nullam
                                cursus erat eget felis egestas, vel ultrices ante ornare. Curabitur consectetur lacus
                                sed vestibulum venenatis. Integer placerat purus vestibulum, suscipit ante non,
                                vestibulum ligula.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <span class="float-right pt-2 pb-2">
                        <a class="see-all" href="javascript:void(0);">See all flights</a>
                    </span>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); // подключаем footer.php ?>