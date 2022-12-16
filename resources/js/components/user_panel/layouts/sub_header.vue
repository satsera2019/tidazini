<template>
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <span>Tidazin</span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <routerLink to="/">
                      <a class="nav-link" href="index.html">Home </a>
                  </routerLink>
                </li>
                <li class="nav-item active">
                  <routerLink to="/about">
                      <a class="nav-link" href="about.html"> About <span class="sr-only">(current)</span> </a>
                  </routerLink>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="departments.html">Departments</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="doctors.html">Doctors</a>
                </li>
                <li class="nav-item">
                  <routerLink to="/contact">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                  </routerLink>
                </li>
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </ul>
            </div>
          </nav>
        </div>
      </header>
      <!-- end header section -->
  </div>
</template>