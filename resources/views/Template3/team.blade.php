<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Team</h2>
            {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>

        <div class="row">
            @foreach ($data['developer'] as $item)
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                    <div class="pic"><img src="{{$item->Poster}}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>{{$item->Name_Developer}}</h4>
                        <span>{{$item->Bidang}}</span>
                        <p>
                            <button data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}" class="btn btn-ungu">
                                Lebih Lanjut
                            </button>
                        </p>
                        <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$item->id}}" aria-hidden="true">
              <div class="modal-dialog">
                <!-- <div class="modal-content"> -->
                  <div class="profile-cardmodal">
                    <div class="card-headeras">
                      <div class="pic">
                        <img src="pic.png" alt="">
                    </div>
                    <div class="namemodal">{{$item->Name_Developer}}</div>
                    <div class="desc">{{$item->Bidang}}</div>
                </div>
                <div class="card-footermodal">
                    {{$item->Deskripsi}}
                </div>
            </div>
            @endforeach


        </div>

    </div>
</section><!-- End Team Section -->
