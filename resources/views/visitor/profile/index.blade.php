@extends('visitor.layouts.app')
@section('content')
    <div class="breadcrumb">
        <h3>Company profile</h3>
    </div>

    <div class="container">
        <div class="row py-5">
            <div class="col-md-7">
                <h2>About Us</h2>
                <p class="text-justify">Yaron Labs is a WHO - GMP, FSSAI Compliance Certified Company. It is a newly
                    constituted Indian
                    Nutraceutical company
                    with a Strong Vision of Boomers and High Ambitions of Millennials. Pronounced Y-e-ron. Yaron is a
                    Hebrew name meaning
                    "is full of joy". Yaron Labs manufactures and markets a wide range of Nutraceuticals such as
                    Tablets, Capsules, Liquids
                    as well as Protein Powders packed in Sachets and Tins. We have covered 250+ formulations across
                    various therapeutic and
                    prophylactic areas. We provide high quality dietary supplements by using latest technologies. We are
                    also properly
                    equipped to undertake third party manufacturing.</p>
                <p class="text-justify">We at Yaron Labs have pledged that every product we manufacture and market
                    adheres to internationally
                    accepted standards
                    of Quality, purity, efficacy and safety. Commitment to save lives and improve Health status is our
                    driving fuel and will
                    always remain our primary objective. Deriving benefit from quality ingredients in the best possible
                    manner ensures the
                    product's effectiveness, shelf life and pH level. In addition our ethical working practices have
                    helped us in the
                    attainment of a number of reputed clients.</p>
                <p class="text-justify">Yaron Labs is a rapidly growing organization dedicated to the production,
                    distribution, and export of
                    Nutraceutical
                    Products. We aim to Produce and sell distinguished Nutraceutical Products that have global quality
                    yet affordable to the
                    Indian masses. Yaron Labs has presence to virtually every corner of India by continually adding new
                    distributors and
                    agents for its Nutraceutical products in India and our constant Endeavor is to expand through the
                    appointment of new
                    promoters to the unexplored areas.
                </p>

            </div>
            <div class="col-md-5 pt-5">
                <div class="image-box" style="background-color: #DC3545; padding: 20px; border-radius: 5px;">
                    <img src="{{asset('img/25.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">
                    Yaron Labs conforms to all the rules and regulations of the Indian Pharmaceutical Association and
                    also follow the steps
                    of international standards as Yaron Labs is an ISO 9001-2015 certified company. Yaron Labs has a
                    challenging and
                    inspiring mission to improve the quality of human life by enabling people to do more, feel better
                    and live longer. With
                    hands on experience in Nutraceutical products and decades of experience in the field of
                    pharmaceuticals we are leaving
                    no stone unturned for serving the Nation.
                </p>
            </div>
        </div>

    </div>
    <div class="parallax">
        <div class="container py-5">
            <div class="row pt-5">
                <div class="col-sm-6  mb-3 mb-sm-0">
                    <div class="card shadow-lg rounded-3">
                        <div class="card-body">
                            <h5 class="card-title text-dark">Special title treatment</h5>
                            <p class="card-text text-dark">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-danger">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card shadow-lg rounded-3">
                        <div class="card-body">
                            <h5 class="card-title text-dark">Special title treatment</h5>
                            <p class="card-text text-dark">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-danger">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-7">
                <h2>Our Strengths</h2>
                <ul>
                    <li>We have already developed a network for proper feedback from our field staff in order to remain
                        in touch with the end
                        users across the country.</li>
                    <li>Our Veteran Directors are backed by decades of Market exposure, product knowledge and industry
                        wisdom.

                    </li>
                    <li>
                        The company has fully integrated QC in-house Laboratory. All the tests are being performed in
                        our own Lab. These testing
                        facilities examine from all parameters of stability and efficiency.
                    </li>
                    <li>
                        Timely Delivery of commitments
                    </li>
                </ul>
            </div>
            <div class="col-md-5">
                <div class="image-box" style="background-color: #DC3545; padding: 20px; border-radius: 5px;">
                    <img src="{{asset('img/25.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-md-5">
                <div class="image-box" style="background-color: #DC3545; padding: 20px; border-radius: 5px;">
                    <img src="{{asset('img/25.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <h2>Our Commitments</h2>
                <ul>
                    <li>We have already developed a network for proper feedback from our field staff in order to remain
                        in touch with the end
                        users across the country.</li>
                    <li>Our Veteran Directors are backed by decades of Market exposure, product knowledge and industry
                        wisdom.

                    </li>
                    <li>
                        The company has fully integrated QC in-house Laboratory. All the tests are being performed in
                        our own Lab. These testing
                        facilities examine from all parameters of stability and efficiency.
                    </li>
                    <li>
                        Timely Delivery of commitments
                    </li>
                </ul>
            </div>

        </div>
    </div>
@endsection
