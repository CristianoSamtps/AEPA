@extends('layouts.master')

@section('title', 'AEPA')

@section('styles')
    <link href="{{ asset('/css/perfil.css') }}" rel="stylesheet">
@endsection

@section('main')


    <main id="main">

        <div id="container">

            <div id="sidebar">
                <ul>

                    <li>
                        <div class="icon-container">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 45">
                                <path
                                    d="M33.3573 10.1825C33.3573 10.1141 33.3573 10.1141 33.3573 10.0456C33.3573 9.97716 33.2892 9.90871 33.2892 9.84026C33.2211 9.7718 33.2211 9.70335 33.153 9.6349C33.153 9.6349 33.153 9.6349 33.0849 9.56644C33.0849 9.56644 33.0849 9.56644 33.0168 9.56644L17.4244 0.462168C17.4244 0.462168 17.4244 0.462168 17.3563 0.462168H17.2882C17.152 0.393714 16.9477 0.393714 16.8116 0.462168H16.7435H16.6754L1.15099 9.56644C1.15099 9.56644 1.15099 9.56644 1.0829 9.56644C1.0829 9.56644 1.08291 9.56644 1.01482 9.6349C0.878637 9.7718 0.810547 9.90871 0.810547 10.0456V10.1141V10.1825V28.3226V28.3911V28.4595C0.810547 28.528 0.878637 28.5964 0.878637 28.6649C0.878637 28.7333 0.946726 28.7333 1.01482 28.8018L1.0829 28.8703C1.0829 28.8703 1.0829 28.8702 1.15099 28.9387L16.7435 37.9745C16.7435 37.9745 16.7435 37.9745 16.8116 37.9745H16.8796C16.9477 37.9745 17.0158 38.043 17.0839 38.043C17.152 38.043 17.2201 38.043 17.2882 37.9745H17.3563C17.3563 37.9745 17.3563 37.9745 17.4244 37.9745L33.0168 28.9387C33.0168 28.9387 33.0168 28.9387 33.0849 28.8703L33.153 28.8018C33.2211 28.7333 33.2892 28.5964 33.3573 28.4595V28.3911V28.3226V10.1825ZM2.17233 11.3462L8.57274 15.0427V23.394L2.17233 27.0905V11.3462ZM9.93453 15.8641L16.403 19.6291V27.1589L9.93453 23.394V15.8641ZM17.0839 10.9355L23.5524 14.7004L17.0839 18.4654L10.6154 14.7004L17.0839 10.9355ZM17.7648 19.6291L24.2333 15.8641V23.394L17.7648 27.1589V19.6291ZM24.9142 13.879L17.7648 9.70335V2.24195L31.3146 10.1825L24.9142 13.879ZM16.403 9.70335L9.25363 13.879L2.85323 10.1825L16.403 2.24195V9.70335ZM9.25363 24.6262L16.403 28.7333V36.1947L2.85323 28.3226L9.25363 24.6262ZM17.7648 28.7333L24.9142 24.6262L31.3146 28.3226L17.7648 36.1947V28.7333ZM25.5951 23.394V15.0427L31.9955 11.3462V27.0905L25.5951 23.394Z"
                                    fill="#C60000" />
                                <path
                                    d="M27.4582 40.3568L22.1693 37.3056C21.6608 37.0005 21.0505 37.2039 20.7454 37.7124C20.4403 38.221 20.6437 38.8312 21.1522 39.1363L26.4411 42.1876C26.6445 42.2893 26.7462 42.2893 26.9496 42.2893C27.2548 42.2893 27.6616 42.0859 27.865 41.7808C28.0684 41.2722 27.9667 40.662 27.4582 40.3568Z"
                                    fill="#CC0000" />
                                <path
                                    d="M24.8138 42.4928L21.4574 40.5603C20.9489 40.2552 20.3386 40.4586 20.0335 40.9671C19.7284 41.4757 19.9318 42.0859 20.4403 42.391L23.7967 44.3235C24.0001 44.4252 24.1018 44.4252 24.3053 44.4252C24.6104 44.4252 25.0172 44.2218 25.2206 43.9167C25.4241 43.4081 25.3223 42.7979 24.8138 42.4928Z"
                                    fill="#CC0000" />
                            </svg>
                        </div>
                        <p>Projetos</p>
                    </li>

                    <li>
                        <div class="icon-container">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="37" height="36"
                                viewBox="0 0 37 36" fill="none">
                                <path
                                    d="M35.8247 24.1913C35.1132 23.2526 33.421 22.8886 31.6518 23.9231C31.6326 23.7315 31.5749 23.5399 31.4787 23.3292C30.9787 22.3713 29.4403 21.8157 27.8058 22.5821C27.5173 22.7353 27.2289 22.8694 26.9212 23.0227C26.6712 23.1376 26.4404 23.2717 26.1904 23.3867C25.7097 22.4288 24.2674 21.8349 22.5752 22.5054C21.8637 22.8119 21.0752 23.1568 20.1714 23.5782C20.0176 23.6549 19.8445 23.7123 19.6907 23.789C19.5753 23.8464 19.4599 23.9039 19.3445 23.9422C19.3637 23.8081 19.383 23.674 19.383 23.5399C19.383 22.333 18.4215 21.4326 16.9984 21.3368L10.691 21.1069C10.4987 21.0878 10.1717 21.0686 10.1333 21.0686C7.30646 21.0686 4.51809 23.2717 2.47969 24.881C1.69126 25.5132 0.883594 26.1454 0.36438 26.3944C0.152849 26.471 0.0566983 26.7009 0.114389 26.9308C0.114389 26.95 0.114389 26.95 0.133619 26.9691C0.210539 27.1224 0.34515 27.2182 0.498991 27.2182C0.537452 27.2182 0.595142 27.2182 0.672062 27.1799C1.2682 26.9308 2.05663 26.2986 2.96045 25.5706L2.97968 25.5515C4.90269 24.038 7.53722 21.9499 9.99868 21.9307C10.0179 21.9307 10.1141 21.9307 10.2294 21.9499C10.5179 21.969 10.6333 21.969 10.6525 21.969L16.9023 22.1989C17.6715 22.2564 18.4984 22.6395 18.4984 23.5782C18.4984 24.3637 17.8061 24.9959 16.9408 24.9959H11.6332C11.5948 24.9959 11.5563 24.9959 11.5179 25.0342C11.4986 25.0342 11.4794 25.0534 11.4602 25.0725L11.3832 25.1492C11.3448 25.1875 11.3256 25.2258 11.3256 25.2833V25.3791C11.3256 25.3982 11.3256 25.4748 11.364 25.5323C11.364 25.5323 11.364 25.5515 11.3832 25.5515C11.3832 25.5706 11.4025 25.5898 11.4025 25.5898C11.4025 25.6089 11.4217 25.6281 11.4409 25.6473L11.4794 25.6856C11.4794 25.6856 11.4794 25.6856 11.4986 25.7047C11.5179 25.7239 11.5371 25.743 11.5755 25.7622C12.0371 25.9538 12.4794 26.1454 12.9024 26.2986C13.1332 26.3944 13.3639 26.4902 13.6139 26.586C13.6716 26.6051 13.6716 26.6051 13.7678 26.6435C15.1523 27.1607 16.46 27.5055 17.7292 27.7354C17.7484 27.7354 17.7869 27.7546 17.8253 27.7546C19.0368 27.9462 20.0176 28.042 20.9022 28.042C24.2482 28.042 27.5942 27.0458 31.7672 24.7852C33.2864 23.8081 34.6325 23.9997 35.1325 24.6894C35.4594 25.13 35.2671 25.7239 34.6709 26.2028C34.6709 26.2028 34.6517 26.2028 34.6517 26.222L34.6325 26.2411C30.2672 29.2489 25.7289 31.3945 20.7675 32.793C19.6714 33.0996 18.6138 33.2528 17.5177 33.2528H15.7485C10.2487 33.272 5.07576 33.2911 3.2489 34.7088C3.17198 34.7663 3.11429 34.8812 3.09506 34.9962C3.07583 35.1111 3.11429 35.226 3.17198 35.3027C3.17198 35.3027 3.17198 35.3218 3.19121 35.3218C3.2489 35.3793 3.38351 35.4559 3.49889 35.4559C3.55658 35.4559 3.61427 35.4368 3.65273 35.4176L3.69119 35.3985C3.71042 35.3985 3.72965 35.3793 3.74888 35.3601C5.30652 34.1341 10.5948 34.1149 15.7293 34.0957H17.4984C18.6522 34.0957 19.8637 33.9425 20.9791 33.636C25.9789 32.2375 30.6134 30.0535 35.1709 26.9308L35.1901 26.9117C35.2094 26.8925 35.2286 26.8733 35.2671 26.835C36.4209 25.858 36.2863 24.8043 35.8247 24.1913ZM30.7672 24.402C26.7097 26.5285 23.4405 27.3906 20.056 27.2182C21.8637 26.5285 24.2097 25.3407 26.3058 24.2679C26.5558 24.1338 26.8058 24.0189 27.0366 23.8848C27.4212 23.6932 27.7673 23.5016 28.1327 23.3484C29.0365 22.9077 30.3442 22.9844 30.7095 23.7315C30.8249 23.9422 30.8057 24.1913 30.7672 24.402ZM14.8254 25.8388C14.5754 25.8772 14.3447 25.8963 14.1524 25.9155C14.0755 25.8963 13.9793 25.858 13.8832 25.8388H14.8254ZM17.0754 25.8772C17.0946 25.8772 17.1138 25.858 17.1138 25.858C17.1331 25.858 17.1331 25.8388 17.1523 25.8388C17.6907 25.8005 18.2292 25.5706 18.6907 25.1875C18.7099 25.1875 18.7099 25.1875 18.7292 25.1683L19.0561 25.0342C19.5368 24.8235 20.0176 24.6128 20.4983 24.3637C21.2098 24.0189 21.9983 23.674 22.8444 23.2909C23.8059 22.9269 25.0366 23.0035 25.402 23.7507C22.3829 25.3024 19.3253 26.8159 17.883 26.8925C17.1138 26.7584 16.3638 26.586 15.5946 26.3561C16.0369 26.2603 16.5177 26.0879 17.0754 25.8772Z"
                                    fill="#D17A13" />
                                <path
                                    d="M18.9213 17.8309C23.7673 17.8309 27.6902 13.9228 27.6902 9.0951C27.7287 4.2674 23.7673 0.359253 18.9213 0.359253C14.0753 0.359253 10.1523 4.2674 10.1523 9.0951C10.1523 13.9228 14.0753 17.8309 18.9213 17.8309ZM15.306 12.0262L15.9983 11.0683C16.1714 10.8384 16.3252 10.8768 16.4983 10.9917C17.306 11.6047 17.979 11.9304 18.729 11.9304C19.3828 11.9304 19.8059 11.6814 19.8059 11.1258C19.8059 10.6469 19.5174 10.4361 18.8059 10.1488L17.5944 9.65067C16.3252 9.17173 15.4599 8.34796 15.4599 7.00693C15.4599 5.45516 16.5944 4.43981 18.0175 4.17161V2.44743C18.0175 2.27501 18.1521 2.16006 18.3059 2.16006H19.5174C19.6905 2.16006 19.8059 2.29417 19.8059 2.44743V4.19077C20.6905 4.38234 21.4789 4.86128 22.0558 5.57011C22.1904 5.72337 22.1327 5.85747 22.0366 5.99158L21.152 7.02609C20.9981 7.1985 20.8828 7.17935 20.6905 7.02609C20.0559 6.50883 19.4982 6.22147 18.9405 6.22147C18.3059 6.22147 18.0175 6.5663 18.0175 6.98777C18.0175 7.46671 18.4213 7.71576 18.9405 7.90733L20.3059 8.42459C21.5174 8.92268 22.4981 9.76562 22.4789 11.2407C22.4789 12.85 21.3058 13.8079 19.7866 14.0952V15.5895C19.7866 15.7619 19.652 15.8769 19.4982 15.8769H18.2867C18.1136 15.8769 17.9982 15.7428 17.9982 15.5895V14.0952C16.806 13.9036 15.8829 13.3098 15.2676 12.5818C15.1329 12.4285 15.1714 12.2369 15.306 12.0262Z"
                                    fill="#D17A13" />
                            </svg>
                        </div>
                        <p>Doações</p>
                    </li>

                    <li class="active">
                        <div class="icon-container">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="34" height="34"
                                viewBox="0 0 34 34" fill="none">
                                <path
                                    d="M25.7475 0.842773H9.09524C4.52691 0.842773 0.842773 4.52691 0.842773 9.09524V25.7475C0.842773 30.3159 4.52691 34 9.09524 34H25.7475C30.3159 34 34 30.3159 34 25.7475V9.09524C34 4.52691 30.3159 0.842773 25.7475 0.842773ZM26.8896 25.7475C26.8528 26.0423 26.6317 26.2633 26.337 26.2633H8.50577C8.21104 26.2633 7.99 26.0423 7.95315 25.7475C7.95315 25.637 7.65842 22.616 9.64786 21.6213C10.09 21.4002 10.6794 21.216 11.3057 21.0318C12.7057 20.5897 14.4372 20.0371 14.732 19.0056C14.732 18.8582 14.6214 18.3424 14.253 17.974C13.5162 17.2372 12.6688 15.1372 12.6688 13.0741V13.0373C12.6688 12.9267 12.8899 10.0163 14.5478 8.80051C14.7688 8.6163 15.6898 7.84263 17.3845 7.84263H17.4214C19.1161 7.84263 20.074 8.6163 20.2582 8.80051C21.916 10.0163 22.1371 12.9267 22.1371 13.0373V13.0741C22.1371 15.1372 21.3266 17.2372 20.5529 17.974C20.1845 18.3424 20.1108 18.8582 20.074 19.0056C20.3687 20.0371 22.1002 20.5897 23.5002 21.0318C24.1265 21.216 24.716 21.4002 25.1581 21.6213C27.1843 22.616 26.9265 25.637 26.8896 25.7475Z"
                                    fill="#D10D54" />
                            </svg>
                        </div>
                        <p>Perfil</p>
                    </li>

                    <li>
                        <div class="icon-container">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="35" height="34"
                                viewBox="0 0 35 34" fill="none">
                                <path
                                    d="M13.6062 8.36289C14.5461 3.05043 16.2869 0.0141602 17.6559 0.0141602C19.0249 0.0141602 20.7657 3.05861 21.7056 8.36289C20.3775 8.46506 19.0249 8.51818 17.6559 8.51818C16.2869 8.51818 14.9343 8.44871 13.6062 8.36289ZM0.954346 15.8044H11.3055C11.3367 13.8091 11.4813 11.8171 11.7386 9.83812C8.86665 9.53263 6.03016 8.95521 3.26731 8.11362C1.87859 10.4493 1.08437 13.0902 0.954346 15.8044ZM22.3717 15.8044C22.351 13.8569 22.2146 11.9124 21.9631 9.98115C20.5532 10.0915 19.1025 10.1528 17.6641 10.1528C16.2256 10.1528 14.7749 10.0915 13.3651 9.98115C13.1136 11.9124 12.9771 13.8569 12.9564 15.8044H22.3717ZM11.7468 23.4053C11.4868 21.4265 11.3394 19.4345 11.3055 17.439H0.954346C1.08437 20.1533 1.87859 22.7941 3.26731 25.1298C6.03016 24.2882 8.86665 23.7108 11.7386 23.4053H11.7468ZM17.6559 24.7253C16.2869 24.7253 14.9343 24.7784 13.6062 24.8806C14.5461 30.193 16.2869 33.2293 17.6559 33.2293C19.0249 33.2293 20.7657 30.1848 21.7056 24.8806C20.3775 24.7947 19.0249 24.7253 17.6559 24.7253ZM12.9401 17.439C12.9607 19.3865 13.0972 21.331 13.3487 23.2623C14.7586 23.152 16.2093 23.0907 17.6477 23.0907C19.0862 23.0907 20.5369 23.152 21.9467 23.2623C22.1982 21.331 22.3347 19.3865 22.3554 17.439H12.9401ZM11.9879 8.21987C12.5682 4.83215 13.5163 1.9103 14.7953 0.144928C10.556 0.883297 6.7632 3.22451 4.20312 6.68334C6.74654 7.42868 9.35204 7.94294 11.9879 8.21987ZM23.3239 25.0236C22.7436 28.4113 21.7955 31.3331 20.5165 33.0985C24.7558 32.3601 28.5486 30.0189 31.1087 26.5601C28.5657 25.8128 25.9601 25.2985 23.3239 25.0236ZM34.3575 17.439H24.0063C23.9751 19.4357 23.8304 21.4291 23.5732 23.4094C26.4457 23.7092 29.2826 24.2854 32.0445 25.1298C33.4344 22.7947 34.2288 20.1535 34.3575 17.439ZM11.9879 25.0236C9.35918 25.299 6.76058 25.8106 4.22355 26.5519C6.77727 30.0094 10.5621 32.3532 14.7953 33.0985C13.5163 31.3331 12.5682 28.4113 11.9879 25.0236ZM23.3239 8.21987C25.9529 7.94636 28.5517 7.43481 31.0882 6.69151C28.5345 3.23403 24.7497 0.890264 20.5165 0.144928C21.7955 1.9103 22.7436 4.83215 23.3239 8.21987ZM23.5732 9.83403C23.8304 11.8144 23.9751 13.8077 24.0063 15.8044H34.3575C34.2288 13.0899 33.4344 10.4488 32.0445 8.11362C29.2826 8.95809 26.4457 9.53423 23.5732 9.83403Z"
                                    fill="#00A4D7" />
                            </svg>
                        </div>
                        <p>Comunidade</p>
                    </li>

                    <li>
                        <div class="icon-container">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="32" height="33"
                                viewBox="0 0 32 33" fill="none">
                                <path
                                    d="M31.9616 15.371C31.9386 15.015 31.9014 14.6533 31.8554 14.2896C31.8424 14.1211 31.7784 13.9612 31.6723 13.8323C31.5663 13.7034 31.4237 13.6122 31.2646 13.5715L28.7366 12.9138C28.5903 12.3618 28.4104 11.8198 28.198 11.2912C27.9849 10.7609 27.7391 10.2453 27.462 9.74741L28.8015 7.43736H28.8006C28.8799 7.29988 28.9178 7.14114 28.9093 6.98139C28.9008 6.82163 28.8464 6.66811 28.7529 6.5404C28.3108 5.93805 27.8297 5.36727 27.3129 4.83196C26.8056 4.31006 26.2646 3.82417 25.6936 3.37762C25.5698 3.26761 25.4155 3.20063 25.2526 3.18617C25.0898 3.17172 24.9267 3.21053 24.7864 3.2971L22.5464 4.67652C22.0637 4.39135 21.5637 4.1387 21.0494 3.92015C20.538 3.70016 20.0131 3.51507 19.4781 3.36607L18.8404 0.756375H18.8385C18.8006 0.600444 18.7182 0.459816 18.602 0.352682C18.4858 0.245548 18.3411 0.176836 18.1866 0.155433C17.818 0.104282 17.4548 0.0640213 17.0935 0.0382808C16.7197 0.0128703 16.3546 0 16.0003 0C15.6461 0 15.2793 0.0128703 14.9053 0.0382808C14.5603 0.0640213 14.2083 0.100652 13.8563 0.149823C13.6932 0.162792 13.5382 0.228348 13.4132 0.337207C13.2882 0.446066 13.1996 0.592711 13.1599 0.756375L12.5225 3.36607C11.9869 3.51548 11.4614 3.70102 10.9493 3.92147C10.4357 4.14036 9.93622 4.393 9.45395 4.67784L7.2139 3.29842C7.08056 3.21662 6.92661 3.17764 6.7717 3.18646C6.61679 3.19528 6.46793 3.25149 6.34413 3.34792C5.18483 4.24752 4.15224 5.30872 3.27591 6.50113C3.16932 6.62889 3.10443 6.788 3.09041 6.95592C3.0764 7.12383 3.11398 7.29204 3.19782 7.4367L4.53545 9.74675C4.25994 10.2444 4.01497 10.7593 3.802 11.2885C3.58924 11.8179 3.40956 12.3608 3.26407 12.9138L0.733455 13.5715C0.582268 13.6106 0.445926 13.6956 0.342045 13.8154C0.238164 13.9352 0.171519 14.0844 0.150723 14.2437C0.101122 14.6239 0.0620812 15.0005 0.0390408 15.371C0.0130136 15.7569 0 16.1334 0 16.5003C0 16.8656 0.0124803 17.2422 0.0390408 17.6276C0.0620812 17.9854 0.097602 18.3457 0.145283 18.7114C0.157859 18.8796 0.221429 19.0394 0.326989 19.1683C0.432549 19.2972 0.57475 19.3886 0.733455 19.4295L3.26407 20.0868C3.40925 20.6392 3.58916 21.1812 3.80264 21.7095C4.01496 22.239 4.25994 22.754 4.53609 23.2513L3.19846 25.5613V25.5633C3.11905 25.7006 3.08133 25.8592 3.09017 26.0188C3.09901 26.1784 3.15401 26.3316 3.24806 26.4586C4.11881 27.6549 5.14745 28.7198 6.30413 29.6224C6.4282 29.7319 6.58245 29.7986 6.74518 29.8131C6.90792 29.8275 7.07095 29.789 7.21134 29.7029L9.45139 28.3215C10.4168 28.892 11.4489 29.3332 12.5225 29.6346L13.1603 32.2416C13.1978 32.3978 13.2801 32.5387 13.3963 32.6459C13.5126 32.7531 13.6575 32.8218 13.8121 32.8429C14.1808 32.8957 14.5459 32.9343 14.9053 32.9597C15.2793 32.9855 15.6442 33 16.0003 33C16.3565 33 16.7197 32.9855 17.0935 32.9597C17.4407 32.936 17.7898 32.8977 18.144 32.8502C18.3073 32.8368 18.4624 32.7709 18.5874 32.6617C18.7123 32.5525 18.8008 32.4056 18.8404 32.2416L19.4781 29.6346C20.0134 29.4835 20.5389 29.298 21.0516 29.0792C21.5652 28.8595 22.0646 28.606 22.5467 28.3202L24.7867 29.7016L24.788 29.7006C24.921 29.7824 25.0747 29.8215 25.2294 29.8127C25.384 29.8039 25.5327 29.7478 25.6562 29.6514C26.2406 29.196 26.794 28.6999 27.3125 28.1664C27.8198 27.6438 28.2916 27.0859 28.7247 26.4966C28.8311 26.3687 28.8958 26.2096 28.9098 26.0417C28.9238 25.8739 28.8864 25.7057 28.8028 25.561L27.4633 23.2509C27.7408 22.7533 27.9866 22.2377 28.1993 21.7072C28.411 21.1792 28.5905 20.638 28.7366 20.0868L31.2646 19.4291V19.4272C31.4162 19.3888 31.553 19.3041 31.657 19.1841C31.7611 19.0641 31.8275 18.9145 31.8477 18.7549C31.8989 18.3748 31.9363 18.0002 31.961 17.6276C31.9859 17.2422 32 16.8656 32 16.5003C32 16.135 31.9866 15.7568 31.9616 15.371ZM21.459 22.1296C20.196 23.4312 18.5344 24.2409 16.7574 24.4209C14.9803 24.6008 13.1978 24.1398 11.7134 23.1163C10.229 22.0929 9.13466 20.5704 8.61676 18.8082C8.09885 17.0459 8.18945 15.153 8.87312 13.452C9.55679 11.7509 10.7912 10.347 12.3661 9.47924C13.941 8.61152 15.7589 8.33377 17.5102 8.69329C19.2614 9.05281 20.8375 10.0274 21.9701 11.4509C23.1027 12.8745 23.7216 14.659 23.7214 16.5003C23.7227 17.5461 23.5235 18.5818 23.1352 19.5479C22.7469 20.514 22.1773 21.3914 21.459 22.1296Z"
                                    fill="#A6A6A6" />
                            </svg>
                        </div>
                        <p>Configurações</p>
                    </li>

                    <li id="logout" class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                        <div class="icon-container">

                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="30" height="33"
                                viewBox="0 0 30 33" fill="none">
                                <path
                                    d="M10.6335 0.903834C7.46189 1.68273 4.28879 2.45603 1.11424 3.22372C0.838342 3.29098 0.825263 3.45228 0.825263 3.67212C0.819451 6.98867 0.811354 10.3054 0.800975 13.6224C0.79184 18.4262 0.782499 23.2295 0.772949 28.0324C0.772949 28.3208 0.838965 28.4634 1.13354 28.5624C4.71249 29.7632 8.28853 30.9728 11.8617 32.1914C11.9582 32.2238 12.0578 32.2468 12.2036 32.2873C12.216 32.0556 12.2353 31.8514 12.2372 31.6502C12.2713 28.2091 12.3043 24.768 12.3362 21.3269C12.3968 15.4843 12.4591 9.64174 12.5231 3.79917C12.5355 2.66632 12.5579 1.53409 12.576 0.401245H12.5137C11.8884 0.568775 11.2644 0.74876 10.6335 0.903834ZM11.199 17.2408C10.892 17.5522 10.4455 17.5316 10.172 17.1741C9.85629 16.7625 9.8127 16.3022 10.0157 15.8277C10.144 15.5287 10.3495 15.3045 10.8067 15.2846C10.892 15.3326 11.0745 15.393 11.199 15.5132C11.6325 15.9304 11.6225 16.8135 11.1996 17.2402L11.199 17.2408Z"
                                    fill="#FF0000" />
                                <path
                                    d="M22.0181 12.1196C22.0237 12.4447 21.9172 12.5045 21.6108 12.5026C19.3048 12.4893 16.9978 12.4827 14.6898 12.4827H14.2283V20.2195C14.3528 20.2252 14.4718 20.2351 14.592 20.2351C16.9195 20.2351 19.2477 20.2351 21.5765 20.2351C22.0125 20.2351 22.0125 20.2351 22.0125 20.6804C22.0125 21.6989 22.0125 22.7173 22.0125 23.7358V24.0285C24.5659 21.4645 27.1411 18.9167 29.6777 16.3888L22.0131 8.7229C22.0131 9.857 21.9982 10.988 22.0181 12.1196Z"
                                    fill="#FF0000" />
                                <path
                                    d="M18.2796 4.07011C18.5574 4.07011 18.657 4.13613 18.6533 4.43257C18.6396 6.3246 18.6489 8.21725 18.6489 10.1099V10.7489C19.1472 10.7489 19.6522 10.757 20.1436 10.7352C20.1909 10.7352 20.2682 10.544 20.2682 10.4406C20.2775 9.26602 20.275 8.09082 20.275 6.91625C20.275 5.54404 20.275 4.17163 20.275 2.799C20.275 2.61217 20.275 2.46519 20.0047 2.46706C18.1127 2.47765 16.2201 2.47266 14.328 2.47391C14.2744 2.47617 14.221 2.48136 14.168 2.48948V4.07509H14.5416C15.7853 4.07509 17.0309 4.08319 18.2796 4.07011Z"
                                    fill="#FF0000" />
                                <path
                                    d="M19.9403 21.9491C19.5181 21.9659 19.0859 21.9534 18.6499 21.9534V27.6164H13.9167V29.2537C14.0413 29.2593 14.1073 29.2693 14.1982 29.2693C16.1096 29.2693 18.019 29.2637 19.9279 29.2768C20.21 29.2768 20.2754 29.1908 20.2742 28.9255C20.2654 26.7125 20.2654 24.4998 20.2742 22.2872C20.2798 22.0257 20.1963 21.9416 19.9403 21.9491Z"
                                    fill="#FF0000" />
                            </svg>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        <p>Logout</p>
                    </li>

                </ul>
            </div>

            <div id="main-content">

                <div class="container-fluid">

                    <div class="row justify-content-center">
                        <!-- Coluna à esquerda -->
                        <div id="profileresume" class="col-4">

                            <div class="imagemperfil">
                                @if($user->foto)


                                    <img src="{{ asset('storage/user_fotos/'.$user->foto) }}" alt="Imagem de perfil">
                                @else
                                    <img src="{{ asset('img/default_user.jpg') }}" alt="Imagem de perfil padrão">
                                @endif
                            </div>

                            <h2> {{ $user->name }} </h2>

                            <p>
                                @if ($user->tipo == 'M')
                                    Membro
                                @elseif($user->tipo == 'A')
                                    Admin
                                @endif
                            </p>

                            <button href="{{ route('tornarMembro') }}">Torne-se Membro</button>

                            <div class="caixa-detalhes">
                                <span>Email</span>
                                <p> {{ $user->email }} </p></span>
                            </div>

                            <div class="caixa-detalhes">
                                <span>Número de Telemóvel</span>
                                <p>{{ $user->telemovel }}</p>
                            </div>

                            <div class="caixa-detalhes">
                                <span>Género</span>
                                <p id="genero">
                                    @if ($user->genero == 'M')
                                        Masculino
                                    @elseif($user->genero == 'F')
                                        Feminino
                                    @elseif($user->genero == 'O')
                                        Outro
                                    @else
                                        <!-- Adicione uma mensagem padrão ou lógica adicional, se necessário -->
                                        {{ $user->genero }}
                                    @endif
                                </p>
                            </div>
                        </div>

                        <div class="col-8">

                            <div class="row">

                                <div id="exprojeto" class="col-4" style="">

                                    <div class="fundo-projeto">
                                        <img src="{{ asset('/img/incendio.jpg') }}" alt="Imagem do projeto">
                                    </div>

                                    <div class="info-projeto">

                                        <h1>Projeto Amazonia</h1>

                                        <button><svg xmlns="http://www.w3.org/2000/svg" width="19" height="18"
                                                viewBox="0 0 19 18" fill="none">
                                                <path
                                                    d="M9.79988 17.9359C14.6835 17.9359 18.6418 13.9355 18.6418 8.99998C18.6418 4.06443 14.6835 0.0640373 9.79988 0.0640373C4.91629 0.0640373 0.958008 4.06443 0.958008 8.99998C0.958008 13.9355 4.91629 17.9359 9.79988 17.9359ZM7.12676 5.38552L8.33848 4.16091L13.0311 8.91833L8.33848 13.6758L7.12676 12.4511L10.6297 8.92576L7.12676 5.38552Z"
                                                    fill="white" />
                                            </svg>
                                        </button>

                                    </div>

                                </div>

                                <div id="exprojeto" class="col-4">

                                    <div class="fundo-projeto">
                                        <img src="{{ asset('/img/pobreza.avif') }}" alt="Imagem do projeto">
                                    </div>

                                    <div class="info-projeto">

                                        <h1>Evolução</h1>

                                        <button><svg xmlns="http://www.w3.org/2000/svg" width="19" height="18"
                                                viewBox="0 0 19 18" fill="none">
                                                <path
                                                    d="M9.79988 17.9359C14.6835 17.9359 18.6418 13.9355 18.6418 8.99998C18.6418 4.06443 14.6835 0.0640373 9.79988 0.0640373C4.91629 0.0640373 0.958008 4.06443 0.958008 8.99998C0.958008 13.9355 4.91629 17.9359 9.79988 17.9359ZM7.12676 5.38552L8.33848 4.16091L13.0311 8.91833L8.33848 13.6758L7.12676 12.4511L10.6297 8.92576L7.12676 5.38552Z"
                                                    fill="white" />
                                            </svg>
                                        </button>

                                    </div>

                                </div>

                                <div id="exprojeto" class="col-4">

                                    <div class="fundo-projeto">
                                        <img src="{{ asset('/img/lixo.jpg') }}" alt="Imagem do projeto">
                                    </div>

                                    <div class="info-projeto">

                                        <h1>Clean Ocean</h1>

                                        <button><svg xmlns="http://www.w3.org/2000/svg" width="19" height="18"
                                                viewBox="0 0 19 18" fill="none">
                                                <path
                                                    d="M9.79988 17.9359C14.6835 17.9359 18.6418 13.9355 18.6418 8.99998C18.6418 4.06443 14.6835 0.0640373 9.79988 0.0640373C4.91629 0.0640373 0.958008 4.06443 0.958008 8.99998C0.958008 13.9355 4.91629 17.9359 9.79988 17.9359ZM7.12676 5.38552L8.33848 4.16091L13.0311 8.91833L8.33848 13.6758L7.12676 12.4511L10.6297 8.92576L7.12676 5.38552Z"
                                                    fill="white" />
                                            </svg>
                                        </button>

                                    </div>

                                </div>

                            </div>

                            <div class="row">
                                <div id="resumedoacoes" class="col-8">
                                    <h2>Últimas Doações</h2>
                                    <span><span class="x"></span></span>
                                    <div class="espacamento"></div>
                                    @if ($user->donation && count($user->donation) > 0)
                                        {{-- dd($user->donation); --}}
                                        @foreach ($user->donation->sortByDesc('created_at')->take(7) as $doacao)
                                            <div class="resumo d-flex">

                                                <div class="data col-1">
                                                    <h1>{{ $doacao->created_at->day }}</h1>
                                                    <p>{{ $doacao->created_at->translatedFormat('M') }}</p>
                                                </div>

                                                <div class="nome col-7">
                                                    <h1>{{ $doacao->title }}</h1>
                                                    <p>{{ $doacao->created_at->format('h:iA') }}</p>
                                                </div>

                                                @if ($doacao->projeto_id)
                                                    <div class="projeto col-1">
                                                        <span href="{{ route('index', ['id' => $doacao->projeto_id]) }}"
                                                            class="tooltip">Clique para ver detalhes do projeto</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="19"
                                                                height="18" viewBox="0 0 19 18" fill="none">
                                                                <path
                                                                    d="M9.79988 17.9359C14.6835 17.9359 18.6418 13.9355 18.6418 8.99998C18.6418 4.06443 14.6835 0.0640373 9.79988 0.0640373C4.91629 0.0640373 0.958008 4.06443 0.958008 8.99998C0.958008 13.9355 4.91629 17.9359 9.79988 17.9359ZM7.12676 5.38552L8.33848 4.16091L13.0311 8.91833L8.33848 13.6758L7.12676 12.4511L10.6297 8.92576L7.12676 5.38552Z"
                                                                    fill="gray" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                @else
                                                    <div class="projeto col-1"></div>
                                                @endif

                                                <div class="estado col-2">
                                                    <button
                                                        class="info @if ($doacao->anonimo == 'S') anonimo @else nao-anonimo @endif">
                                                        @if ($doacao->anonimo == 'N')
                                                            Visivel
                                                        @elseif($doacao->anonimo == 'S')
                                                            Anonimo
                                                        @endif
                                                    </button>
                                                </div>

                                                <div class="valor col-1">
                                                    <h1>{{ $doacao->valor }}€</h1>
                                                </div>

                                            </div>
                                        @endforeach
                                    @else
                                        <p>Nenhuma doação encontrada.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

    </main>

    <section class="background2">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1439 621" fill="none">
            <path
                d="M160 91C81 71.5 -1 0 -1 0V279.5C-1 279.5 88.5 384.5 180 384.5C271.5 384.5 367 283 496 337.5C625 392 775 597 967.5 543C1160 489 1217 471.5 1305 489.5C1393 507.5 1439 620.5 1439 620.5V384.5C1439 384.5 1454 275.5 1318.5 211.5C1183 147.5 1022.5 275 917.5 266C812.5 257 632 74 511.5 48.5C391 23 239 110.5 160 91Z"
                fill="url(#paint0_linear_15_69)" fill-opacity="0.29" />
            <defs>
                <linearGradient id="paint0_linear_15_69" x1="719.246" y1="0" x2="719.246" y2="620.5"
                    gradientUnits="userSpaceOnUse">
                    <stop offset="0.0625" stop-color="#4FCD8B" />
                    <stop offset="0.651042" stop-color="#11492B" stop-opacity="0" />
                </linearGradient>
            </defs>
        </svg>

    </section>


@endsection
<!--<div class="col-3" id="profile-summary">

                        Primeira secção do perfil
                        <img src="caminho/para/imagem-de-perfil.jpg" alt="Imagem de Perfil">

                        <h2>Nome do Utilizador</h2>

                        <p>Doador</p>

                        <button>Torne-se Membro</button>

                        <div class="caixa-detalhes">
                            <span>Email</span>
                            <p>exemplo@dominio.com</p></span>
                        </div>

                        <div class="caixa-detalhes">
                            <span>Número de Telemóvel</span>
                            <p>+351 123 456 789</p>
                        </div>

                        <div class="caixa-detalhes">
                            <span>Género</span>
                            <p>Masculino</p>
                        </div>

                    </div>


                    <div lass="col-3"id="projects">

                        <h2>Projetos</h2>
                        <p>Aqui são listados os principais projetos associados ao utilizador.</p>
                    </div>
                    <div id="donations">
                        <h2>Últimas Doações</h2>
                        <p>Aqui são apresentadas as informações relacionadas às últimas doações efetuadas pelo utilizador.</p>
                    </div>
                </div>-->
