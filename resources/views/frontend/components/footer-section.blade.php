<!-- About Section-->
<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder">
                            <span id="about-title" class="text-gradient d-inline"><!--Set about title from database--></span>
                    </h2>
                    <p id="about-details" class="text-muted"><!--Set about details from database--></p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a id="social-twitter" class="text-gradient" target="_blank" href=""><i class="bi bi-twitter"></i></a>
                        <a id="social-linkedin" class="text-gradient" target="_blank" href=""><i class="bi bi-linkedin"></i></a>
                        <a id="social-github" class="text-gradient" target="_blank" href=""><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // active page
    document.getElementById('home').classList.add('active');

    // Get abouts data from database
    getAboutData();
    async function getAboutData(){
        try {
            let URL = "/aboutData";
            let response = await axios.get(URL);
            document.getElementById('about-title').innerHTML=response.data['title'];
            document.getElementById('about-details').innerHTML=response.data['details'];
        }catch (e){
            alert(e);
        }
    }

    // Get social link from database
    getSocialLink();
    async function getSocialLink(){
        try{
            let URL = "/socialData";
            const response =  await axios.get(URL);
            // After start loding system
            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');
            // After end loding system
            document.getElementById('social-twitter').href=response.data['twitterLink'];
            document.getElementById('social-linkedin').href=response.data['linkdinLink'];
            document.getElementById('social-github').href=response.data['githubLink'];
        }catch(e){
            alert(e);
        }
    }

</script>
