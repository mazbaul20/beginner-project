<!-- Header-->
<header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                <!-- Header text content-->
                <div class="text-center text-xxl-start">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                        <div id="keyLine" class="text-uppercase">
                            <!--Set keyLine from database-->
                        </div>
                    </div>
                    <div id="short_title" class="fs-3 fw-light text-muted">
                        <!--Set short_title from database-->
                    </div>
                    <h1 class="display-3 fw-bolder mb-5">
                        <span id="title" class="text-gradient d-inline">
                            <!--Set title from database-->
                        </span>
                    </h1>

                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{ route('resume.page') }}">Resume</a>
                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ route('project.page') }}">Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7">
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <div class="profile">
                        <img id="hero-img" class="profile-img" src="" alt="..." />
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    // get heroproperties data
    getHeroData();
    async function getHeroData(){
        try{
            let URL = "/heroData";
            // Before start loding system
            document.getElementById('loading-div').classList.remove('d-none');
            document.getElementById('content-div').classList.add('d-none');
            // Before end loding system
            let response = await axios.get(URL);

            document.getElementById('keyLine').innerHTML=response.data['keyLine'];
            document.getElementById('short_title').innerHTML=response.data['short_title'];
            document.getElementById('title').innerHTML=response.data['title'];
            document.getElementById('hero-img').src=response.data['img'];
        }catch (e){
            alert(e);
        }
    }
</script>
