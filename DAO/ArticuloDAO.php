<?php
    namespace DAO;

    use Models\Articulo as Articulo;

    class ArticuloDAO{

        private $arrArticulos = array();

        public function createArticle(Articulo $art){
            array_push($this->arrArticulos,$art);
        }

        public function ShowListArticles(){
            foreach ($this->arrArticulos as $arti) {
                ?>
                <div class="card" style="width: 18rem; height: 10rem">
                    <div class="card-body color">
                        <h5 class="card-title"><?php echo $arti->getTitle()?></h5>
                        <p class="card-text"><?php echo $arti->getDescription()?></p>
                    </div>
                </div>
                <?php
            }
        }

        
    }
?>