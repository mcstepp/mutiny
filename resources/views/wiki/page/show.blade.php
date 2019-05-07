@extends('layouts.main')

@section('content')

    @include('layouts._breadcrumb', ['menu' => [
    [
    'link-name' => 'Wiki',
    'link-route' => '#'
    ],[
    'link-route' => '#',
    'link-name' => 'Category Title'
    ],[
    'link-name' => 'Page Title'
    ]
    ]])

    <div class="container-fluid my-3">

        <h1 class="m-fancy-header neon-default">Page Title</h1>

        <div class="row m-wiki-section">
            <div class="col-lg-4 col-xl-3">
                <div class="m-wiki-meta m-card card">
                    <div class="card-top text-center">
                        <strong>Page Title</strong>
                    </div>
                    <div class="card-body">
                        <img src="https://via.placeholder.com/200x300?text=Main+Image">
                    </div>

                </div>
            </div>
            <div class="col-lg-8 col-xl-9 order-lg-first">
                <div class="m-wiki-summary m-card card bg-industrial">
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce feugiat libero eget elementum congue. In quis vestibulum sapien. Fusce id lacinia metus, vel ullamcorper dolor. Sed libero leo, congue in placerat in, ornare vitae orci. Ut cursus feugiat orci, vitae pulvinar urna auctor et. Integer a urna et erat dapibus venenatis vitae non lacus. Aenean convallis suscipit nibh ut pretium. Sed suscipit ut quam et ornare. Donec non dolor sit amet magna eleifend fermentum. Aliquam ut convallis sem. Praesent sodales scelerisque diam, nec ultricies odio. In hac habitasse platea dictumst. Donec elementum lacus blandit nunc egestas, quis blandit ipsum rutrum. Phasellus interdum id ligula in aliquam. Nulla facilisi. Duis gravida, lacus non sagittis finibus, est magna sodales erat, id dignissim enim erat at erat.
                    </div>
                </div>
                <div class="m-wiki-toc m-card card">
                    <div class="card-top text-center">
                        <strong>Contents</strong>
                    </div>
                    <div class="card-body">
                        <ol>
                            <li>Section</li>
                            <li>Section</li>
                            <li>Section</li>
                            <li>Section
                                <ol>
                                    <li>Subsection</li>
                                    <li>Subsection</li>
                                    <li>Subsection</li>
                                    <li>Subsection</li>
                                </ol>
                            </li>
                            <li>Section</li>
                            <li>Section</li>
                            <li>Section
                                <ol>
                                    <li>Subsection</li>
                                    <li>Subsection</li>
                                </ol>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row m-wiki-section">
            <div class="m-card card bg-industrial">
                <div class="card-top">
                    <h2 class="m-fancy-title text-uppercase">Section</h2>
                </div>
                <div class="card-body row">
                    <aside class="col-xl-3 col-lg-4">
                        <div class="card m-card">
                            <div class="card-body">
                                <img src="https://via.placeholder.com/300?text=Aside+Image">
                                <p>Vestibulum faucibus lectus eget pulvinar malesuada. Suspendisse posuere libero non sollicitudin dapibus. Nullam ac nulla id velit dictum bibendum. Nulla rhoncus nunc in mi euismod lacinia. Vivamus velit diam, interdum a lobortis viverra, lacinia quis ex.</p>
                            </div>
                        </div>

                    </aside>
                    <section class="col-xl-9 col-lg-8">
                        <p>Vestibulum faucibus lectus eget pulvinar malesuada. Suspendisse posuere libero non sollicitudin dapibus. Nullam ac nulla id velit dictum bibendum. Nulla rhoncus nunc in mi euismod lacinia. Vivamus velit diam, interdum a lobortis viverra, lacinia quis ex. Integer ornare ipsum vitae vehicula pharetra. Vestibulum dignissim ipsum et turpis rutrum aliquet. Nunc vulputate orci ac risus auctor commodo. Sed sodales sapien faucibus nibh fermentum, eget maximus elit feugiat. Nunc cursus ligula in leo sagittis sollicitudin. Nunc molestie nisi vel leo dapibus viverra.</p>

                        <p>Proin eget erat odio. Integer sollicitudin tristique velit et viverra. Maecenas condimentum vel ligula vel imperdiet. Vivamus sollicitudin ante id libero semper elementum. In tincidunt aliquam metus, eget cursus dolor. Nam lobortis ultricies blandit. Pellentesque id ullamcorper mi. Etiam ac augue non ipsum eleifend rhoncus. Integer convallis, orci id cursus suscipit, quam eros sodales ligula, ac lobortis erat tortor quis tortor. Suspendisse in ex vitae arcu semper commodo ut sed dolor. Integer mauris mi, porttitor vitae enim id, lacinia dictum est. Aliquam eget urna id quam convallis scelerisque ut et sapien. Proin non arcu scelerisque, congue sapien nec, dictum ipsum. Suspendisse pellentesque justo sed sollicitudin faucibus.</p>

                        <p>Morbi iaculis mi quis nulla laoreet, eu rhoncus nisl suscipit. Phasellus in arcu at neque maximus fringilla vitae nec felis. Donec a ultricies dolor, condimentum placerat nisl. Fusce et velit non odio malesuada bibendum. In at libero nibh. Vivamus tempor justo sed magna rhoncus pretium. Curabitur sit amet metus ultrices, mattis risus at, congue nibh. Integer nisl nisi, blandit ac pretium quis, varius non sapien. Donec tempus dui orci, eget facilisis risus dictum eget. Fusce tempor luctus nunc sed ornare. Duis consequat felis vel fringilla faucibus. Praesent dictum bibendum mi ac vestibulum. Aenean et dolor lacinia, maximus ipsum nec, scelerisque mi. Cras ut libero pretium, efficitur massa vel, rutrum mauris. Duis eu mi ex.</p>

                        <p>Sed neque nulla, tempor congue ultrices at, sagittis a odio. Curabitur semper dui sed viverra congue. Curabitur pretium sagittis nisi nec bibendum. Maecenas non sapien quis lectus pulvinar lobortis. Donec magna lacus, iaculis vel pellentesque vitae, gravida et velit. Fusce ornare, tellus dapibus fringilla tincidunt, enim lorem ultricies lacus, et lacinia nulla felis quis sapien. Sed a odio dapibus, rutrum dui at, sagittis quam. Vivamus et fermentum elit. Donec pharetra iaculis elit id rutrum. Nulla sit amet convallis orci, eget consequat nunc. Ut faucibus ligula ut malesuada congue. Aliquam vestibulum augue ut felis pulvinar mattis. Pellentesque a enim eu orci mattis elementum. Morbi non orci id urna laoreet convallis eu vitae diam. Vivamus mauris erat, mollis ut turpis ut, sollicitudin faucibus nisl. Praesent arcu enim, placerat quis mollis convallis, elementum a arcu.</p>

                        <p>Mauris blandit nisi a metus cursus mollis. Proin eget sodales odio. Cras sollicitudin sem vel justo luctus, quis consequat ligula egestas. Fusce sollicitudin sem sed ipsum sagittis, eget rutrum ipsum varius. Curabitur consectetur nunc sit amet arcu commodo semper. Donec vel sem quis ex viverra volutpat. Praesent euismod magna quis sapien porta fringilla. Curabitur efficitur semper mattis. Vivamus vel quam id dolor commodo pretium. Pellentesque suscipit, leo sit amet faucibus dictum, lectus nisi porttitor elit, vitae cursus quam ex quis tortor. Fusce scelerisque sapien suscipit dapibus egestas. Ut nec auctor purus, in tristique ante. Nullam sed lacus id dolor varius elementum. Nunc fermentum congue dolor, in pretium elit dictum sit amet. Donec at vehicula nisl, vitae feugiat lorem. Pellentesque viverra porttitor felis ut porttitor.</p>
                    </section>
                </div>
            </div>
        </div>

        <div class="row m-wiki-section">
            <div class="m-card card bg-industrial">
                <div class="card-top">
                    <h2 class="m-fancy-title text-uppercase">Section</h2>
                </div>
                <div class="card-body row">
                    <aside class="col-xl-3 col-lg-4 order-lg-last">
                        <div class="card m-card">
                            <div class="card-body">
                                <img src="https://via.placeholder.com/300?text=Aside+Image">
                                <p>Vestibulum faucibus lectus eget pulvinar malesuada. Suspendisse posuere libero non sollicitudin dapibus. Nullam ac nulla id velit dictum bibendum. Nulla rhoncus nunc in mi euismod lacinia. Vivamus velit diam, interdum a lobortis viverra, lacinia quis ex.</p>
                            </div>
                        </div>

                    </aside>
                    <section class="col-xl-9 col-lg-8">
                        <p>Vestibulum faucibus lectus eget pulvinar malesuada. Suspendisse posuere libero non sollicitudin dapibus. Nullam ac nulla id velit dictum bibendum. Nulla rhoncus nunc in mi euismod lacinia. Vivamus velit diam, interdum a lobortis viverra, lacinia quis ex. Integer ornare ipsum vitae vehicula pharetra. Vestibulum dignissim ipsum et turpis rutrum aliquet. Nunc vulputate orci ac risus auctor commodo. Sed sodales sapien faucibus nibh fermentum, eget maximus elit feugiat. Nunc cursus ligula in leo sagittis sollicitudin. Nunc molestie nisi vel leo dapibus viverra.</p>

                        <p>Proin eget erat odio. Integer sollicitudin tristique velit et viverra. Maecenas condimentum vel ligula vel imperdiet. Vivamus sollicitudin ante id libero semper elementum. In tincidunt aliquam metus, eget cursus dolor. Nam lobortis ultricies blandit. Pellentesque id ullamcorper mi. Etiam ac augue non ipsum eleifend rhoncus. Integer convallis, orci id cursus suscipit, quam eros sodales ligula, ac lobortis erat tortor quis tortor. Suspendisse in ex vitae arcu semper commodo ut sed dolor. Integer mauris mi, porttitor vitae enim id, lacinia dictum est. Aliquam eget urna id quam convallis scelerisque ut et sapien. Proin non arcu scelerisque, congue sapien nec, dictum ipsum. Suspendisse pellentesque justo sed sollicitudin faucibus.</p>

                        <p>Morbi iaculis mi quis nulla laoreet, eu rhoncus nisl suscipit. Phasellus in arcu at neque maximus fringilla vitae nec felis. Donec a ultricies dolor, condimentum placerat nisl. Fusce et velit non odio malesuada bibendum. In at libero nibh. Vivamus tempor justo sed magna rhoncus pretium. Curabitur sit amet metus ultrices, mattis risus at, congue nibh. Integer nisl nisi, blandit ac pretium quis, varius non sapien. Donec tempus dui orci, eget facilisis risus dictum eget. Fusce tempor luctus nunc sed ornare. Duis consequat felis vel fringilla faucibus. Praesent dictum bibendum mi ac vestibulum. Aenean et dolor lacinia, maximus ipsum nec, scelerisque mi. Cras ut libero pretium, efficitur massa vel, rutrum mauris. Duis eu mi ex.</p>

                        <p>Sed neque nulla, tempor congue ultrices at, sagittis a odio. Curabitur semper dui sed viverra congue. Curabitur pretium sagittis nisi nec bibendum. Maecenas non sapien quis lectus pulvinar lobortis. Donec magna lacus, iaculis vel pellentesque vitae, gravida et velit. Fusce ornare, tellus dapibus fringilla tincidunt, enim lorem ultricies lacus, et lacinia nulla felis quis sapien. Sed a odio dapibus, rutrum dui at, sagittis quam. Vivamus et fermentum elit. Donec pharetra iaculis elit id rutrum. Nulla sit amet convallis orci, eget consequat nunc. Ut faucibus ligula ut malesuada congue. Aliquam vestibulum augue ut felis pulvinar mattis. Pellentesque a enim eu orci mattis elementum. Morbi non orci id urna laoreet convallis eu vitae diam. Vivamus mauris erat, mollis ut turpis ut, sollicitudin faucibus nisl. Praesent arcu enim, placerat quis mollis convallis, elementum a arcu.</p>

                        <p>Mauris blandit nisi a metus cursus mollis. Proin eget sodales odio. Cras sollicitudin sem vel justo luctus, quis consequat ligula egestas. Fusce sollicitudin sem sed ipsum sagittis, eget rutrum ipsum varius. Curabitur consectetur nunc sit amet arcu commodo semper. Donec vel sem quis ex viverra volutpat. Praesent euismod magna quis sapien porta fringilla. Curabitur efficitur semper mattis. Vivamus vel quam id dolor commodo pretium. Pellentesque suscipit, leo sit amet faucibus dictum, lectus nisi porttitor elit, vitae cursus quam ex quis tortor. Fusce scelerisque sapien suscipit dapibus egestas. Ut nec auctor purus, in tristique ante. Nullam sed lacus id dolor varius elementum. Nunc fermentum congue dolor, in pretium elit dictum sit amet. Donec at vehicula nisl, vitae feugiat lorem. Pellentesque viverra porttitor felis ut porttitor.</p>
                    </section>
                </div>
            </div>
        </div>

    </div>

@endsection

