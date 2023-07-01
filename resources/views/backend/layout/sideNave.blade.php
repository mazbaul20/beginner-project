<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Pages</div>

                <section>
                    <!--Home page-->
                    <a class="nav-link collapsed" href="#" id="Home" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Home
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                            <a class="nav-link collapsed" id="Hero" href="{{ route('admin.Hero-properties') }}">
                                Hero-properties
                            </a>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#" aria-expanded="false" aria-controls="pagesCollapseError">
                                Abouts
                            </a>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#" aria-expanded="false" aria-controls="pagesCollapseError">
                                socials-link
                            </a>
                        </nav>
                    </div>
                </section>

                <section>
                    <!--Resume page-->
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Resume" aria-expanded="false" aria-controls="Resume">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Resume
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="Resume" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#" aria-expanded="false" aria-controls="pagesCollapseError">
                                Experience
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#" aria-expanded="false" aria-controls="pagesCollapseError">
                                Education
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#" aria-expanded="false" aria-controls="pagesCollapseError">
                                Professional-Skills
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#" aria-expanded="false" aria-controls="pagesCollapseError">
                                Languages
                            </a>
                        </nav>
                    </div>
                </section>

                <section>
                    <!--Projects page-->
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Projects" aria-expanded="false" aria-controls="Resume">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Projects
                    </a>
                </section>

                <section>
                    <!--Contact page-->
                    <a class="nav-link collapsed" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Contact
                    </a>
                </section>
                <section>
                    <!--Contact page-->
                    <a class="nav-link collapsed" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        SEO-Properties
                    </a>
                </section>


            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Admin Dashboard
        </div>
    </nav>
</div>

