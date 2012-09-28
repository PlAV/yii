<?php
	 class PostController extends CController
     {           
         public function actionIndex()
         {
             $this->pageTitle = "Мой блог :: Главная страница";
             
             $criteria=new CDbCriteria;
             $criteria->order = 'created DESC';
             
             // Создаем обьект класса CPagination в который
             // передаем кол-во наших постов
             $pages=new CPagination(Posts::model()->count($criteria));
             // Сколько сообщений выводить на страницу?
             $pages->pageSize=2;
             $pages->applyLimit($criteria);
             
             $all_posts = Posts::model()->findAll($criteria);
             
             $this->render('index', array(
                 'posts' => $all_posts, 
                 // теперь нам надо в отображение послать еще
                 // и переменную $pages
                 'pages' => $pages,
             ));
         }
         
         
         public function actionView ()
        {
            $this->pageTitle = "";

            if (!empty($_GET['url'])) {
               
                // На всякий случай удаляю пробелы и устанавливаю
                // максимальную длину для url в 100 символов.
                $url = substr(trim($_GET['url']), 0, 100);
               
                // Только англ. буквы и цифры в url
                if(preg_match("/^[a-zA-Z0-9\-\_]+$/", $url)) {
                    $post = Posts::model()->find("url = :url", array(':url' => $url));
                    if (!empty($post)) {
                        // Тема есть в базе
                        
                        // Для того чтобы сгенерировать форму добавления комментария
                        $comm_form= new Comments();
                        
                        if(!empty($_POST['Comments'])){
                            $comm_form->attributes=$_POST['Comments'];
                            $comm_form->id_post=(int)$post->id;
                            $comm_form->created= date('Y-m-d H:i:s');
                                
                                if(!Yii::app()->user->IsGuest){
                                    $comm_form->id_user=Yii::app()->user->id;
                                    $comm_form->login=Yii::app()->user->name;
                                }else{
                                    $comm_form->id_user=0;
                                }
                                
                                if ($comm_form->validate()){
                                    $comm_form->save();
                                    //$this->redirect(Yii::app()->homeUrl);
                                }else{
                                    echo "comment not added";
                                }
                                       
                        }
                        
                        $comm_criteria= new CDbCriteria;
                        $comm_criteria->condition='id_post= :id';
                        $comm_criteria->params=array(':id'=>$post->id);
                        $comm_criteria->order='created ASC';
                        
                        $comments= $comm_form->findAll($comm_criteria);
                        
                        $this->render('view', array(
                            'post' => $post,
                            'comm_form'=>$comm_form,
                            'comments'=>$comments,
                        ));
                    } else {
                        // Такой темы в базе нет. 404?
                        Yii::app()->runController('post/error404');
                    }
                } else {
                    $this->render('403');
                }
            } else {
                // $_GET['url'] пустое. Выводим главную страницу
                Yii::app()->runController('post/index');
            }
        }

        public function actionError404 ()
        {
            $this->render('404');
        }
        
        
     }
?>