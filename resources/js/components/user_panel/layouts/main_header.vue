<template>
    <div class="hero_area">
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <routerLink to="/">
                        <a class="navbar-brand">
                            <span>{{ $t("main.app_name") }}</span>
                        </a>
                    </routerLink>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                        <li class="nav-item">
                            <routerLink to="/">
                                <a class="nav-link">
                                    {{ $t("main.home") }}
                                </a>
                            </routerLink>
                        </li>
                        <li class="nav-item active">
                            <routerLink to="/about">
                                <a class="nav-link"> 
                                    {{ $t("main.about") }}
                                    <span class="sr-only">(current)</span> </a>
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
                                <a class="nav-link" href="contact.html">
                                    {{ $t("main.contact") }}
                                </a>
                            </routerLink>
                        </li>
                        <form class="form-inline">
                            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                        </ul>
                    </div>

                    <select v-model="$i18n.locale" id="locale">
                        <option v-for="locale in $i18n.availableLocales" :value="locale">{{ locale }}</option>
                    </select>
                </nav>
            </div>
        </header>
    </div>
</template>