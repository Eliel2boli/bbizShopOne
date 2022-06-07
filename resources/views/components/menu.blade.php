<nav class="mt-2 ">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    @can("manager")
                    <li class="nav-item ">
                            <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Tableau de bord
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="far fa-eye nav-icon"></i>
                                    <p>Vue globale</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-indent nav-icon"></i>
                                    <p>Ventes</p>
                                </a>
                            </li>
                        </ul>
                    </li>     
                    @endcan

                    @can("admin")
                    <li class="nav-item">
                            <a href="#" class="nav-link ">
                            <i class=" nav-icon fas fa-user-shield"></i>
                            <p>
                                Habilitations
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a
                                href="#" class="nav-link ">
                                <i class=" nav-icon fas fa-users-cog"></i>
                                <p>Utilisateurs</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-fingerprint"></i>
                                <p>Roles et permissions</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Gestion articles
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link ">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Type d'articles</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-list-ul"></i>
                                <p>Articles</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                <i class="nav-icon 	fas fa-file-invoice-dollar"></i>
                                <p>Tarifications</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endcan

                    @can("employe")
                    <li class="nav-header">Vente</li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Gestion des clients
                        </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-exchange-alt"></i>
                        <p>
                            Gestion des ventes
                        </p>
                        </a>
                    </li>

                    <li class="nav-header">CAISSE</li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-coins"></i>
                        <p>
                            Gestion des paiements
                        </p>
                        </a>
                    </li>
                    @endcan
                
                </ul>
            </nav>