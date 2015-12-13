        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">UnjukPrestasi.go.id</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <li>
                        <input type="text" class="form-control" placeholder="Search">
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
                    </li>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Andi <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="login.php"><i class="fa fa-fw fa-edit"></i>Login</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#ch"><i class="fa fa-fw fa-bar-chart-o"></i> Charts <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="ch" class="collapse">
                            <li>
                                <a href="javascript:;" data-toggle="collapse" data-target="#com"> OSN <i class="fa fa-fw fa-caret-down"></i></a>
                                <ul id="com" class="collapse">
                                    <li>
                                        <a href="charts.php" style="color:white"> OSN Matematika </a>
                                    </li>
                                    <li>
                                        <a href="#" style="color:white"> OSN Fisika </a>
                                    </li>
                                    <li>
                                        <a href="#" style="color:white"> OSN Kimia </a>
                                    </li>
                                    <li>
                                        <a href="#" style="color:white"> OSN Biologi </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#presis"><i class="fa fa-fw fa-table"></i> Prestasi Siswa <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="presis" class="collapse">
                            <li>
                                <a href="javascript:;" data-toggle="collapse" data-target="#osn"> OSN <i class="fa fa-fw fa-caret-down"></i></a>
                                <ul id="osn" class="collapse">
                                    <li>
                                        <a href="osn-page.php" style="color:white"> OSN Matematika </a>
                                    </li>
                                    <li>
                                        <a href="#" style="color:white"> OSN Fisika </a>
                                    </li>
                                    <li>
                                        <a href="#" style="color:white"> OSN Kimia </a>
                                    </li>
                                    <li>
                                        <a href="#" style="color:white"> OSN Biologi </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="osn-page.php"> O2SN </a>
                            </li>
                            <li>
                                <a href="osn-page.php"> Gemastik </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#presgu"><i class="fa fa-fw fa-table"></i> Prestasi Guru <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="presgu" class="collapse">
                            <li>
                                <a href="tables.php"> Kalpataru </a>
                            </li>
                            <li>
                                <a href="#"> Karya Tulis </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#ps"><i class="fa fa-fw fa-table"></i> Prestasi Sekolah <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="ps" class="collapse">
                            <li>
                                <a href="#"> UN </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Form <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="form_data_guru.php"> Data Guru </a>
                            </li>
                            <li>
                                <a href="form_prestasi_guru.php"> Prestasi Guru </a>
                            </li>
                            <li>
                                <a href="form_data_siswa.php"> Data Siswa </a>
                            </li>
                            <li>
                                <a href="form_prestasi_siswa.php"> Prestasi Siswa </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
