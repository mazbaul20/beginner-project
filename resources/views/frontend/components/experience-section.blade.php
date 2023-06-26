<section>
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h2 class="text-primary fw-bolder mb-0">Experience</h2>
        <a id="resume-link" class="btn btn-primary px-4 py-3" href="" target="_blank">
            <div class="d-inline-block bi bi-download me-2"></div>
            Download Resume
        </a>
    </div>

    <!-- Experience Card 1-->
    <div id="experience-list">

    </div>

</section>

<script>
    // Resume link, fetch link from ajax
    getResumeLink();
    async function getResumeLink(){
        try {
            let URL = "/resumeLink";
            // start loder
            document.getElementById('loading-div').classList.remove('d-none');
            document.getElementById('content-div').classList.add('d-none');

            let response = await axios.get(URL);
            let setLink = response.data['downloadLink'];
            document.getElementById('resume-link').setAttribute('href',setLink);
        } catch (error) {
            alert(error);
        }
    }// end method

    // Experience list, fetch data from ajax
    Experience();
    async function Experience() {
        try {
            let URL = "/experienceData";
            const experience = await axios.get(URL);
            experience.data.forEach((item)=>{
                document.getElementById('experience-list').innerHTML+=(`
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">${item['duration']}</div>
                                        <div class="small fw-bolder">${item['title']}</div>
                                        <div class="small text-muted">${item['designation']}</div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>${item['details']}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                `);
            });

        } catch (error) {
            alert(error);
        }
    }
</script>
