<?php
if($register_post=='0'){
?>
<div class="body_tbl">
        <!-- SMP_TEMPLATE_HEADER start -->
        <h1>JapanCircleメンバー登録フォーム</h1>
       <?php if($title_top=='1'){
        ?>
        <p class="header_emesg">ご入力内容に不備がございます。エラーが発生した項目を修正し、送信しなおしてください。</p>
        <?php
        }else{
            ?>
        <p class="header_rmesg">必要事項をご入力の上、送信ボタンを押してください。<br>「*」のある項目については入力必須となります。</p>
        <?php
        }
        ?>
        
        <!-- SMP_TEMPLATE_HEADER end -->
        <!-- SMP_TEMPLATE_FORM start -->
       <?php echo $this->Form->create('Register');?>
                <div class="smp_tmpl">
                                <dl class="cf">
                                        <dt class="title">
                                                企業名 <span class="need">＊</span>
                                                <span class="caution">個人でお申し込みの場合はお名前をご入力下さい。</span>
                                        </dt>
                                        <dd class="data ">
                                                <?php echo $this->Form->input('user_name', array('class'=>'input','maxlength'=>128, 'label'=>false, 'div'=>false)); ?>
                                                <br>
                                                <span class="msg">
                                                    <?php if($user=='1'){
                                                        echo "既に登録済みです";
                                                    }
                                                    ?>
                                                </span>
                                        </dd>
                                </dl>
                                <dl class="cf">
                                        <dt class="title">
                                                部署
                                        </dt>
                                        <dd class="data ">
                                                <?php echo $this->Form->input('division', array('class'=>'input', 'maxlength'=>32,'label'=>false, 'div'=>false)); ?>
                                                <br>
                                                <span class="msg"></span>
                                        </dd>
                                </dl>
                                <dl class="cf">
                                        <dt class="title">
                                                お名前 <span class="need">＊</span>
                                        </dt>
                                        <dd class="data ">
                                                姓　
                                                <?php echo $this->Form->input('lastName', array('class'=>'input','maxlength'=>32, 'label'=>false, 'div'=>false)); ?>
                                                <br>
                                                名　
                                                <?php echo $this->Form->input('firstName', array('class'=>'input','maxlength'=>32, 'label'=>false, 'div'=>false)); ?>
                                                <br>
                                                <span class="msg"> 
                                               
                                                </span>　<span class="msg">
                                                
                                                </span>
                                        </dd>
                                        <dt class="title">
                                                お名前（カナ）
                                        </dt>
                                        <dd class="data ">
                                                セイ　
                                                <?php echo $this->Form->input('lastName_kana', array('class'=>'input','maxlength'=>32, 'label'=>false, 'div'=>false)); ?>
                                                <br>
                                                メイ　
                                                <?php echo $this->Form->input('firstName_kana', array('class'=>'input','maxlength'=>32, 'label'=>false, 'div'=>false)); ?>
                                                <br>
                                                <span class="msg"></span><span class="msg"></span>
                                        </dd>
                                </dl>
                                <dl class="cf">
                                        <dt class="title">
                                                役職
                                        </dt>
                                        <dd class="data ">
                                                <?php echo $this->Form->input('post', array('class'=>'input','maxlength'=>64, 'label'=>false, 'div'=>false)); ?>
                                                <br>
                                                <span class="msg"></span>
                                        </dd>
                                </dl>
                                <dl class="cf" style="border:0" ;="">
                                        <dt class="title">
                                           住所<span class="need">＊</span><br>
                                           <span class="need" style="font-size:80%;">郵便番号を入力すると番地までが自動で入力されます。</span><br> 
                                        </dt><dd class="data num">
                                        〒　
                                         <?php echo $this->Form->input('zip1', array('class'=>'input','maxlength'=>6, 'label'=>false, 'div'=>false)); ?>
                                        -　
                                        <?php echo $this->Form->input('zip2', array('class'=>'input','maxlength'=>6, 'label'=>false, 'div'=>false)); ?>

                                   <span class="msg"></span><span class="msg"></span>
                                   都道府県
                                    <?php 
                                        echo $this->Form->input('address1',array('options'=>$options1,'label'=>false,'div'=>false));
                                    ?>
                                 
                                       
                                   <br>
                                   <span class="msg"></span>
                                  </dd>
                                </dl>
                                <dl class="cf">
                                  <dt class="title">
                                  </dt><dd class="data">市区町村番地、建物・ビル名など<br> 
                                   <?php echo $this->Form->input('address2', array('class'=>'input','maxlength'=>128, 'label'=>false, 'div'=>false)); ?>
                                   <br>
                                   <span class="msg">
                                        
                                   </span>
                                  </dd>
                                </dl>
                                <dl class="cf">
                                        <dt class="title">
                                                電話番号 <span class="need">＊</span>
                                        </dt>
                                        <dd class="data phone">
                                                <ul class="cf">
                                                        <li class="num01">
                                                            <?php echo $this->Form->input('tel_num_a', array('class'=>'input','maxlength'=>6, 'label'=>false, 'div'=>false)); ?>
                                                        -</li>
                                                        <li class="num02">
                                                            <?php echo $this->Form->input('tel_num_e', array('class'=>'input','maxlength'=>4 ,'label'=>false, 'div'=>false)); ?>
                                                          -</li>
                                                        <li class="num03">
                                                            <?php echo $this->Form->input('tel_num_n', array('class'=>'input','maxlength'=>5 ,'label'=>false, 'div'=>false)); ?>
                                                        </li>
                                                </ul>
                                            <br>
                                           <span class="msg"> 
                                               <?php if($num_phone=='1'){
                                                    
                                                   echo " 電話番号が入力されていません。";
                                                }
                                                ?>
                                               
                                           </span>
                                        </dd>
                                </dl>
                                <dl class="cf">
                                  <dt class="title">
                                   FAX番号
                                  </dt><dd class="data phone">
                                   <ul class="cf">
                                        <li class="num01">
                                             <?php echo $this->Form->input('fax_num_a', array('class'=>'input','maxlength'=>6, 'label'=>false, 'div'=>false)); ?>
                                            -</li>
                                        <li class="num02">
                                             <?php echo $this->Form->input('fax_num_e', array('class'=>'input','maxlength'=>4, 'label'=>false, 'div'=>false)); ?>
                                            -</li>
                                        <li class="num03">
                                             <?php echo $this->Form->input('fax_num_n', array('class'=>'input', 'maxlength'=>5,'label'=>false, 'div'=>false)); ?>
                                        </li>
                                   </ul>
                                   <span class="msg"></span>
                                </dd>
                                 </dl>
                                <dl class="cf">
                                  <dt class="title">
                                   メールアドレス <span class="need">＊</span>
                                  </dt><dd class="data ">
                                   <?php echo $this->Form->input('mail', array('class'=>'input','maxlength'=>129 ,'label'=>false, 'div'=>false)); ?>
                                   <br>（確認用）<br>
                                   <?php echo $this->Form->input('mail_cf', array('class'=>'input','maxlength'=>129, 'label'=>false, 'div'=>false)); ?>
                                   <span class="msg">
                                      <?php if($mail=='1'){
                                            echo "既に登録済みです";
                                        }
                                        ?>
                                   </span>
                                  </dd>
                                </dl>
                                <dl class="cf">
                                  <dt class="title">
                                        URL
                                  </dt><dd class="data ">
                                   <?php echo $this->Form->input('siteurl', array('class'=>'input','maxlength'=>64 ,'label'=>false, 'div'=>false)); ?>
                                   <br>
                                   <span class="msg"></span>
                                  </dd>
                                </dl>
                                <dl class="cf">
                                        <dt class="title">
                                           業種
                                        </dt>
                                        <dd class="data multi1">
                                            <div class="box-gyoshu">
                                                <?php echo $this->Form->input('Register.gyoshu',
                                                        array(   
                                                            'multiple' => 'checkbox',
                                                            'options' => $checkboxs1,
                                                            'label'=>FALSE,
                                                            'div'=>FALSE)
                                                        );?>
                                            </div>
                                                
                                                <span class="msg"></span>
                                        </dd>
                                </dl>
                                <dl class="cf">
                                        <dt class="title">
                                                   業種その他
                                        </dt>
                                        <dd class="data ">
                                           <?php echo $this->Form->input('gyoshu_other', array('class'=>'input','maxlength'=>64, 'label'=>false, 'div'=>false)); ?>
                                           <br>
                                           <span class="msg"></span>
                                        </dd>
                                </dl>
                                <dl class="cf">
                                        <dt class="title">
                                                   事業内容
                                                  </dt><dd class="data ">
                                                   <?php echo $this->Form->input('jigyou', array('rows'=>'4','type'=>'textarea', 'label'=>false, 'div'=>false)); ?>
                                                   <br>
                                                   <span class="msg"></span>
                                        </dd>
                                </dl>
                                <dl class="cf">
                                        <dt class="title">
                                                   利用規約　/ 個人情報に同意しますか？ <span class="need">＊</span>
                                                   <span class="caution">※会員規約についてはフォーム下部のリンクよりご確認下さい。</span>
                                        </dt>
                                        <dd class="data multi2">
                                                   <ul class="cf">
                                                        <li><label>
                                                                <?php echo $this->Form->input('personalInfo', array('class'=>'input','type'=>'checkbox','value'=>'1', 'label'=>false, 'div'=>false)); ?>
                                                                <span>はい</span></label></li>
                                                   </ul>
                                                   <input type="hidden" value="" name="personalInfo">
                                                   
                                                   <span class="msg"> 
                                                   <?php if($personalInfo=='1'){
                                                       echo "入力必須です ";
                                                   }
                                                    ?>
                                                   
                                                   </span>
                                        </dd>
                                </dl>
                                <h2>JapanCircle　アンケート</h2>
                                <dl class="cf">
                                        <p>ご登録頂いた方に、より役立つ情報をお届けするために、アンケートへのご協力をお願い致します。</p>
                                        <p class="slide_btn btn" style="width:60%; margin-bottom:10px;">
                                                ここをクリックするとアンケートが閉じます。
                                                <br>回答せずに登録する場合はアンケートを閉じて"送信"をクリックして下さい。
                                        </p>
                                </dl>
                        <div class="slide_box toggle_box">
                                                <dl class="cf">
                                                        <dt class="title">
                                                                ご登録者様区分
                                                        </dt>
                                                        <dd class="data ">
                                                            <?php 
                                                                echo $this->Form->input('kubun',array('options'=>$options2,'label'=>false,'div'=>false));
                                                            ?>
                                                                <br>
                                                                <span class="msg"></span>
                                                        </dd>
                                                </dl>
                                                <dl class="cf">
                                                        <dt class="title">
                                                                貴社売上高
                                                        </dt>
                                                        <dd class="data ">
                                                             <?php 
                                                                echo $this->Form->input('uriage',array('options'=>$options3,'label'=>false,'div'=>false));
                                                               ?>
                                                                <br>
                                                                <span class="msg"></span>
                                                        </dd>
                                                </dl>
                                                <dl class="cf">
                                                        <dt class="title">
                                                           貴社従業員規模
                                                        </dt>
                                                        <dd class="data ">
                                                            <?php 
                                                                echo $this->Form->input('kibo',array('options'=>$options4,'label'=>false,'div'=>false));
                                                            ?>
                                                           <br>
                                                           <span class="msg"></span>
                                                        </dd>
                                                </dl>
                                                <dl class="cf">
                                                        <dt class="title">
                                                           JapanCircleをどのようにして知りましたか？
                                                        </dt>
                                                        <dd class="data multi1">
                                                            <ul class="cf">   
                                                                <div class="box-gyoshu">
                                                                    <?php echo $this->Form->input('Register.firstank01',
                                                                            array(   
                                                                                'multiple' => 'checkbox',
                                                                                'options' => $checkboxs2,
                                                                                'label'=>FALSE,
                                                                                'div'=>FALSE)
                                                                            );?>
                                                                </div>
                                                            </ul>
                                                           <span class="msg"></span>
                                                           ※「紹介者」とお答え頂いた方は、ご紹介者のお名前、もしくはお社名をご記入下さい。
                                                           <?php echo $this->Form->input('firstank02', array('class'=>'input','maxlength'=>64, 'label'=>false, 'div'=>false)); ?>
                                                           <br>
                                                           <span class="msg"></span>
                                                           ※「その他」とお答え頂いた方は、何でお知りになったかご記入下さい。
                                                           <?php echo $this->Form->input('firstank03', array('class'=>'input','maxlength'=>64 ,'label'=>false, 'div'=>false)); ?>
                                                           <br>
                                                           <span class="msg"></span>
                                                        </dd>
                                                </dl>
                                                <dl class="cf">
                                                  <dt class="title">
                                                   海外とのビジネスをお考えになったのはいつ頃ですか？
                                                  </dt>
                                                        <dd class="data multi1">
                                                                <ul class="cf">
                                                                    <div class="box-gyoshu">
                                                                        <?php echo $this->Form->input('Register.firstank04',
                                                                                array(   
                                                                                    'multiple' => 'checkbox',
                                                                                    'options' => $checkboxs3,
                                                                                    'label'=>FALSE,
                                                                                    'div'=>FALSE)
                                                                                );?>
                                                                    </div>
                                                                       
                                                                </ul>
                                                           <input type="hidden" value="" name="firstank04">
                                                           <span class="msg"></span>
                                                        </dd>
                                                </dl>
                                                <dl class="cf">
                                                        <dt class="title">
                                                                JETROの海外支援サービスを利用したことがありますか？
                                                        </dt>
                                                        <dd class="data multi1">
                                                                利用したことがある
                                                                <ul class="cf">
                                                                        <li><label>
                                                                                <?php echo $this->Form->input('firstank05', array('class'=>'input','value'=>'1','type'=>'checkbox', 'label'=>false, 'div'=>false)); ?>
                                                                                <span>はい</span></label></li>
                                                                </ul>
                                                                <input type="hidden" value="" name="firstank05">
                                                                <span class="msg"></span>
                                                                利用した感想はいかがでしたか？
                                                                <ul class="cf">
                                                                    <div class="box-gyoshu">
                                                                        <?php echo $this->Form->input('Register.firstank06',
                                                                                array(   
                                                                                    'multiple' => 'checkbox',
                                                                                    'options' => $checkboxs4,
                                                                                    'label'=>FALSE,
                                                                                    'div'=>FALSE)
                                                                                );?>
                                                                    </div>
                                                                       
                                                                </ul>
                                                                <span class="msg"></span>
                                                                利用詳細についてご記入下さい。
                                                                <?php echo $this->Form->input('firstank07', array('rows'=>'4','type'=>'textarea', 'label'=>false, 'div'=>false)); ?>
                                                                <span class="msg"></span>
                                                        </dd>
                                                </dl>
                                                <dl class="cf">
                                                        <dt class="title">
                                                                各都道府県の海外支援サービスを利用したことがありますか？
                                                        </dt>
                                                        <dd class="data multi1">
                                                                利用したことがある
                                                                <ul class="cf">
                                                                        ■市場調査
                                                                        <li><label>
                                                                                <?php echo $this->Form->input('firstank08', array('class'=>'input','value'=>'1','type'=>'checkbox', 'label'=>false, 'div'=>false)); ?>
                                                                                <span>はい</span></label></li>
                                                                        <input type="hidden" value="" name="firstank08">
                                                                </ul>
                                                                <span class="msg"></span>
                                                                利用した感想はいかがでしたか？
                                                                <ul class="cf">
                                                                    <div class="box-gyoshu">
                                                                        <?php echo $this->Form->input('Register.firstank09',
                                                                                array(   
                                                                                    'multiple' => 'checkbox',
                                                                                    'options' => $checkboxs5,
                                                                                    'label'=>FALSE,
                                                                                    'div'=>FALSE)
                                                                                );?>
                                                                    </div>
                                                                       
                                                                </ul>
                                                           <span class="msg"></span>
                                                          利用詳細についてご記入下さい。
                                                                 <?php echo $this->Form->input('firstank10', array('rows'=>'4','type'=>'textarea', 'label'=>false, 'div'=>false)); ?>
                                                                <span class="msg"></span>
                                                        </dd>
                                                </dl>
                                        <dl class="cf">
                                                <dt class="title">
                                                   その他民間企業の海外支援サービスを利用したことがありますか？
                                                </dt>
                                                <dd class="data multi1">
                                                        <ul class="cf">
                                                                利用したことがある
                                                                <li><label>
                                                                        <?php echo $this->Form->input('firstank11', array('class'=>'input','value'=>'1','type'=>'checkbox', 'label'=>false, 'div'=>false)); ?>
                                                                        <span>はい</span></label></li>
                                                        </ul>
                                                        <input type="hidden" value="" name="firstank11">
                                                        <span class="msg"></span>
                                                        利用した感想はいかがでしたか？
                                                        <ul class="cf">
                                                             <div class="box-gyoshu">
                                                                        <?php echo $this->Form->input('Register.firstank12',
                                                                                array(   
                                                                                    'multiple' => 'checkbox',
                                                                                    'options' => $checkboxs6,
                                                                                    'label'=>FALSE,
                                                                                    'div'=>FALSE)
                                                                                );?>
                                                                    </div>
                                                                
                                                        </ul>
                                                        <input type="hidden" value="" name="firstank12">
                                                        <span class="msg"></span>
                                                        利用詳細についてご記入下さい。
                                                         <?php echo $this->Form->input('firstank13', array('rows'=>'4','type'=>'textarea', 'label'=>false, 'div'=>false)); ?>
                                                        <span class="msg"></span>
                                                </dd>
                                        </dl>
                                        <dl class="cf" style=" border-bottom: 0px solid #DDDDDD;">
                                                <dt class="title width:100%;">
                                                        以下をする上で参考になった・参考にしているサービス名称をご教示ください
                                                </dt>
                                                <dd class="data multi1">
                                                        <ul class="cf">
                                                                ■市場調査
                                                                <li><label>
                                                                        <?php echo $this->Form->input('firstank14', array('class'=>'input','value'=>'1','type'=>'checkbox', 'label'=>false, 'div'=>false)); ?>
                                                                        <span>はい</span></label></li>
                                                                <input type="hidden" value="" name="firstank14">
                                                        </ul>
                                                        参考にしているサービス
                                                        <?php echo $this->Form->input('firstank15', array('class'=>'input', 'maxlength'=>128,'label'=>false, 'div'=>false)); ?>
                                                        <br>
                                                        <span class="msg">
                                                        </span>
                                                        <span class="msg">
                                                        </span>
                                                        ■企業探し
                                                        <ul class="cf">
                                                                <li><label>
                                                                        <?php echo $this->Form->input('firstank16', array('class'=>'input','value'=>'1','type'=>'checkbox', 'label'=>false, 'div'=>false)); ?>
                                                                        <span>はい</span></label></li>
                                                        </ul>
                                                        <input type="hidden" value="" name="firstank16">
                                                        参考にしているサービス
                                                        <?php echo $this->Form->input('firstank17', array('class'=>'input','maxlength'=>128 ,'label'=>false, 'div'=>false)); ?>
                                                        <br>
                                                        <span class="msg">
                                                        </span>
                                                        <span class="msg">
                                                        </span>
                                                        ■ビジネスツアー参加
                                                        <ul class="cf">
                                                                <li>
                                                                        <label>
                                                                                <?php echo $this->Form->input('firstank18', array('class'=>'input','value'=>'1','type'=>'checkbox', 'label'=>false, 'div'=>false)); ?>
                                                                                <span>
                                                                                        はい
                                                                                </span>
                                                                        </label>
                                                                </li>
                                                        </ul>
                                                        <input type="hidden" value="" name="firstank18">
                                                        参考にしているサービス
                                                        <?php echo $this->Form->input('firstank19', array('class'=>'input', 'maxlength'=>128,'label'=>false, 'div'=>false)); ?>
                                                        <br>
                                                        <span class="msg">
                                                        </span>
                                                        <span class="msg">
                                                        </span>
                                                        ■レンタルオフィス探し
                                                        <ul class="cf">
                                                                <li>
                                                                        <label>
                                                                                <?php echo $this->Form->input('firstank20', array('class'=>'input','value'=>'1','type'=>'checkbox', 'label'=>false, 'div'=>false)); ?>
                                                                                <span>
                                                                                        はい
                                                                                </span>
                                                                        </label>
                                                                </li>
                                                        </ul>
                                                        <input type="hidden" value="" name="firstank20">
                                                        参考にしているサービス
                                                        <?php echo $this->Form->input('firstank21', array('class'=>'input','maxlength'=>128, 'label'=>false, 'div'=>false)); ?>
                                                        <br>
                                                        <span class="msg">
                                                        </span>
                                                        <span class="msg">
                                                        </span>
                                                        ■工業団地探し
                                                        <ul class="cf">
                                                                <li>
                                                                        <label>
                                                                                <?php echo $this->Form->input('firstank22', array('class'=>'input','value'=>'1','type'=>'checkbox', 'label'=>false, 'div'=>false)); ?>
                                                                                <span>
                                                                                        はい
                                                                                </span>
                                                                        </label>
                                                                </li>
                                                        </ul>
                                                        <input type="hidden" value="" name="firstank22">
                                                        参考にしているサービス
                                                        <?php echo $this->Form->input('firstank23', array('class'=>'input','maxlength'=>128 ,'label'=>false, 'div'=>false)); ?>
                                                        <br>
                                                        <span class="msg">
                                                        </span>
                                                        <span class="msg">
                                                        </span>
                                                        ■スタッフ採用・育成
                                                        <ul class="cf">
                                                                <li>
                                                                        <label>
                                                                                <?php echo $this->Form->input('firstank24', array('class'=>'input','value'=>'1','type'=>'checkbox', 'label'=>false, 'div'=>false)); ?>
                                                                                <span>
                                                                                        はい
                                                                                </span>
                                                                        </label>
                                                                </li>
                                                        </ul>
                                                        <input type="hidden" value="" name="firstank24">
                                                        参考にしているサービス
                                                        <?php echo $this->Form->input('firstank25', array('class'=>'input','maxlength'=>128, 'label'=>false, 'div'=>false)); ?>
                                                        <br>
                                                        <span class="msg">
                                                        </span>
                                                        <span class="msg">
                                                        </span>
                                                        ■法務手続き
                                                        <ul class="cf">
                                                                <li>
                                                                        <label>
                                                                                <?php echo $this->Form->input('firstank26', array('class'=>'input','value'=>'1','type'=>'checkbox', 'label'=>false, 'div'=>false)); ?>
                                                                                <span>
                                                                                        はい
                                                                                </span>
                                                                        </label>
                                                                </li>
                                                        </ul>
                                                        <input type="hidden" value="" name="firstank26">
                                                        参考にしているサービス
                                                        <?php echo $this->Form->input('firstank27', array('class'=>'input', 'maxlength'=>128,'label'=>false, 'div'=>false)); ?>
                                                        <br>
                                                        <span class="msg">
                                                        </span>
                                                        <span class="msg">
                                                        </span>
                                                </dd>
                                        </dl>
                                        <dl class="cf">
                                                <dt class="title">
                                                        ご興味のある項目についてご教示ください
                                                </dt>
                                                
                                                <dd class="data multi2">
                                                    <div class="box-firstank28">
                                                        <ul class="cf">
                                                            
                                                                <?php echo $this->Form->input('Register.firstank28',
                                                                        array(   
                                                                            'multiple' => 'checkbox',
                                                                            'options' => $checkboxs7,
                                                                            'label'=>FALSE,
                                                                            'div'=>FALSE)
                                                                        );?>
                                                           
                                                        </ul>
                                                     </div>
                                                        <span class="msg">
                                                        </span>
                                                        「その他」とご回答頂いた方について、どのような事にご興味をお持ちであるかをご記入下さい
                                                         <?php echo $this->Form->input('firstank29', array('rows'=>'4','type'=>'textarea', 'label'=>false, 'div'=>false)); ?>
                                                        <br>
                                                        <span class="msg"></span>
                                                </dd>
                                        </dl>
                                        <dl class="cf">
                                                <dt class="title">
                                                        いつまでに海外での事業をスタートさせたいですか？
                                                </dt>
                                                <dd class="data multi1">
                                                        <ul class="cf">
                                                            <div class="box-gyoshu">
                                                                <?php echo $this->Form->input('Register.firstank30',
                                                                        array(   
                                                                            'multiple' => 'checkbox',
                                                                            'options' => $checkboxs8,
                                                                            'label'=>FALSE,
                                                                            'div'=>FALSE)
                                                                        );?>
                                                            </div>
                                                        </ul>
                                                        <span class="msg">
                                                        </span>
                                                        「既に開始している」とご回答頂いた方について、国名をご記入下さい。
                                                        <?php echo $this->Form->input('firstank31', array('class'=>'input', 'maxlength'=>128,'label'=>false, 'div'=>false)); ?>
                                                        <br>
                                                        <span class="msg">
                                                        </span>
                                                </dd>
                                        </dl>
                                        <dl class="cf">
                                        <dt class="title">
                                                その他（ご質問、ご要望などございましたらご記入ください。）
                                        </dt>
                                        <dd class="data ">
                                             <?php echo $this->Form->input('firstank32', array('rows'=>'4','type'=>'textarea', 'label'=>false, 'div'=>false)); ?>
                                                <br>
                                                <span class="msg">
                                                </span>
                                        </dd>
                                </dl>
                        </div>
                </div>
                <input type="hidden" name="confirm" value="false">
                <input class="submit" type="submit" name="submit" value="送信"> 
                </form>
<?php 
} 
else if($register_post=='1')
{
?>
<div class="body_tbl">
 <?php echo $this->Form->create('Register');?>
  <div class="smp_tmpl">
     <dl class="cf">
      <dt class="title">
       企業名
       <span class="caution">個人でお申し込みの場合はお名前をご入力下さい。</span>
      </dt><dd class="data ">
       <?php echo $data['Register']['user_name']?> <br> 
      <input type="hidden" name="user_name" value=<?php echo $data['Register']['user_name']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       部署
      </dt><dd class="data ">
          <?php echo  $data['Register']['division']?>
        <br>     
      <input type="hidden" name="division" value=<?php echo $data['Register']['division']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       姓
      </dt><dd class="data ">
       <?php echo$data['Register']['lastName']?> <br>     
      <input type="hidden" name="lastName" value=<?php echo $data['Register']['division']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       名
      </dt><dd class="data ">
       <?php echo$data['Register']['firstName']?> <br>
       <input type="hidden" name="firstName" value=<?php echo $data['Register']['firstName']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       姓（カナ）
      </dt><dd class="data ">
       <?php echo$data['Register']['lastName_kana']?> <br>
       <input type="hidden" name="lastName_kana" value=<?php echo $data['Register']['lastName_kana']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       名（カナ）
      </dt><dd class="data ">
        <?php echo$data['Register']['firstName_kana']?><br>
        <input type="hidden" name="firstName_kana" value=<?php echo $data['Register']['firstName_kana']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       役職
      </dt><dd class="data ">
        <?php echo$data['Register']['post']?><br>
        <input type="hidden" name="post" value=<?php echo $data['Register']['post']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       郵便番号
      </dt><dd class="data num">
       <?php echo$data['Register']['zip1']?>-<?php echo$data['Register']['zip2']?><br>
       <input type="hidden" name="zip1" value=<?php echo $data['Register']['zip1']?>>
       <input type="hidden" name="zip2" value=<?php echo $data['Register']['zip2']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       都道府県
      </dt><dd class="data ">
        <?php echo$data['Register']['address1']?><br>
        <input type="hidden" name="address1" value=<?php echo $data['Register']['address1']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       市区町村番地、建物・ビル名など
      </dt><dd class="data ">
       <?php echo$data['Register']['address2']?> <br> 
      <input type="hidden" name="address2" value=<?php echo $data['Register']['address2']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       電話番号
      </dt><dd class="data phone">
       <?php echo$data['Register']['tel_num_a']?>-<?php echo$data['Register']['tel_num_e']?>-<?php echo$data['Register']['tel_num_n']?> <br>      </dd>
     </dl>
      <input type="hidden" name="tel_num_a" value=<?php echo $data['Register']['tel_num_a']?>>
      <input type="hidden" name="tel_num_e" value=<?php echo $data['Register']['tel_num_e']?>>
      <input type="hidden" name="tel_num_n" value=<?php echo $data['Register']['tel_num_n']?>>
     <dl class="cf">
      <dt class="title">
       FAX番号
      </dt><dd class="data phone">
        <?php echo$data['Register']['fax_num_a']?>-<?php echo$data['Register']['fax_num_e']?>-<?php echo$data['Register']['fax_num_n']?><br>      </dd>
     </dl>
      <input type="hidden" name="fax_num_a" value=<?php echo $data['Register']['fax_num_a']?>>
      <input type="hidden" name="fax_num_e" value=<?php echo $data['Register']['fax_num_e']?>>
      <input type="hidden" name="fax_num_n" value=<?php echo $data['Register']['fax_num_n']?>>
     <dl class="cf">
      <dt class="title">
       メールアドレス
      </dt><dd class="data ">
       <?php echo$data['Register']['mail']?> <br> 
      <input type="hidden" name="mail" value=<?php echo $data['Register']['mail']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       URL
      </dt><dd class="data ">
        <?php echo$data['Register']['siteurl']?><br>
        <input type="hidden" name="siteurl" value=<?php echo $data['Register']['siteurl']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       業種
      </dt><dd class="data multi1">
        <?php echo$data['Register']['gyoshu']?><br>
        <input type="hidden" name="gyoshu" value=<?php echo $data['Register']['gyoshu']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       業種その他
      </dt><dd class="data ">
       <?php echo$data['Register']['gyoshu_other']?> <br>
        <input type="hidden" name="gyoshu_other" value=<?php echo $data['Register']['gyoshu_other']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       事業内容
      </dt><dd class="data ">
        <?php echo$data['Register']['jigyou']?><br>
        <input type="hidden" name="jigyou" value=<?php echo $data['Register']['jigyou']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       利用規約　/ 個人情報に同意しますか？
       <span class="caution">※会員規約についてはフォーム下部のリンクよりご確認下さい。</span>
      </dt><dd class="data multi2">
       はい <br>      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       ご登録者様区分
      </dt><dd class="data ">
       <?php echo$data['Register']['kubun']?> <br> 
       <input type="hidden" name="kubun" value=<?php echo $data['Register']['kubun']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       貴社売上高
      </dt><dd class="data ">
        <?php echo$data['Register']['uriage']?><br>
        <input type="hidden" name="uriage" value=<?php echo $data['Register']['uriage']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       貴社従業員規模
      </dt><dd class="data ">
       <?php echo$data['Register']['kibo']?> <br>
        <input type="hidden" name="kibo" value=<?php echo $data['Register']['kibo']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       JapanCircleをどのようにして知りましたか？
      </dt><dd class="data multi1">
       <?php echo$data['Register']['firstank01']?>  <br>
        <input type="hidden" name="firstank01" value=<?php echo $data['Register']['firstank01']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       「紹介者」とお答え頂いた方
      </dt><dd class="data ">
        <?php echo$data['Register']['firstank02']?> <br>  
      <input type="hidden" name="firstank02" value=<?php echo $data['Register']['firstank02']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       「その他」とお答え頂いた方
      </dt><dd class="data ">
        <?php echo$data['Register']['firstank03']?> <br>
        <input type="hidden" name="firstank03" value=<?php echo $data['Register']['firstank03']?>>  
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       海外とのビジネスをお考えになったのはいつ頃ですか？
      </dt><dd class="data multi1">
        <?php echo$data['Register']['firstank04']?> <br>
    <input type="hidden" name="firstank04" value=<?php echo $data['Register']['firstank04']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       JETROの海外支援サービスを利用したことがありますか？
      </dt><dd class="data multi1">
        <?php if($data['Register']['firstank05']=='1'){
                echo "はい";
            }
            ?> <br>
        <input type="hidden" name="firstank05" value=<?php echo $data['Register']['firstank05']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       利用した感想_JETRO
      </dt><dd class="data multi1">
        <?php echo$data['Register']['firstank06']?> <br>
        <input type="hidden" name="firstank06" value=<?php echo $data['Register']['firstank06']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       利用内容詳細_JETRO
      </dt><dd class="data ">
       <?php echo$data['Register']['firstank07']?>  <br>
      </dd>
      <input type="hidden" name="firstank07" value=<?php echo $data['Register']['firstank07']?>>
     </dl>
     <dl class="cf">
      <dt class="title">
       各都道府県の海外支援サービスを利用したことがありますか？
      </dt><dd class="data multi1">
            <?php if($data['Register']['firstank08']=='1'){
                echo "はい";
            }
            ?> <br></dd>
      <input type="hidden" name="firstank08" value=<?php echo $data['Register']['firstank08']?>>
     </dl>
     <dl class="cf">
      <dt class="title">
       利用した感想_各都道府県の
      </dt><dd class="data multi1">
         <?php echo$data['Register']['firstank09']?><br>
      </dd>
      <input type="hidden" name="firstank09" value=<?php echo $data['Register']['firstank09']?>>
     </dl>
     <dl class="cf">
      <dt class="title">
       利用内容詳細_各都道府県の
      </dt><dd class="data ">
        <?php echo$data['Register']['firstank10']?> <br>  
      <input type="hidden" name="firstank10" value=<?php echo $data['Register']['firstank10']?>>
      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       その他民間企業の海外支援サービスを利用したことがありますか？
      </dt><dd class="data multi1">
        <?php if($data['Register']['firstank11']=='1'){
                echo "はい";
            }
            ?> <br>      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       利用した感想_その他民間企業
      </dt><dd class="data multi1">
       <?php echo$data['Register']['firstank12']?>  <br>      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       利用内容詳細_その他民間企業
      </dt><dd class="data ">
        <?php echo$data['Register']['firstank13']?> <br>      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       市場調査
      </dt><dd class="data multi1">
      <?php if($data['Register']['firstank14']=='1'){
                echo "はい";
            }
            ?>   <br>      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       市場調査_参考にしているサービス
      </dt><dd class="data ">
        <?php echo$data['Register']['firstank15']?> <br>      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       企業探し
      </dt><dd class="data multi1">
         <?php if($data['Register']['firstank16']=='1'){
                echo "はい";
            }
            ?><br>      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       企業探し_参考にしているサービス
      </dt><dd class="data ">
        <?php echo$data['Register']['firstank17']?> <br>      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       ビジネスツアー参加
      </dt><dd class="data multi1">
       <?php if($data['Register']['firstank18']=='1'){
                echo "はい";
            }
            ?>  <br>      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       ビジネスツアー参加_参考にしているサービス
      </dt><dd class="data ">
        <?php echo$data['Register']['firstank19']?> <br>      </dd>
     </dl>
     <dl class="cf">
     <dt class="title">
     レンタルオフィス探し
     </dt><dd class="data ">
         <?php if($data['Register']['firstank20']=='1'){
                echo "はい";
            }
            ?>
      <br>      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       レンタルオフィス探し_参考にしているサービス
      </dt><dd class="data ">
        <?php echo$data['Register']['firstank21']?> <br>      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       工業団地探し
      </dt><dd class="data multi1">
      <?php if($data['Register']['firstank22']=='1'){
            echo "はい";
        }
        ?> <br>    <br>      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       工業団地探し_参考にしているサービス
      </dt><dd class="data ">
          <?php echo$data['Register']['firstank23']?>  </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       スタッフ採用・育成
      </dt><dd class="data multi1">
       <?php if($data['Register']['firstank24']=='1'){
            echo "はい";
        }
        ?> 
          <br>      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       スタッフ採用・育成_参考にしているサービス
      </dt><dd class="data ">
        <?php echo$data['Register']['firstank25']?> <br>      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       法務手続き
      </dt><dd class="data multi1">
      <?php if($data['Register']['firstank26']=='1'){
            echo "はい";
        }
        ?>  <br>      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       法務手続き_参考にしているサービス
      </dt><dd class="data ">
        <?php echo$data['Register']['firstank27']?>  <br>      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       ご興味のある項目についてご教示ください
      </dt><dd class="data multi2">
        <?php echo$data['Register']['firstank28']?> <br>      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       「その他」とご回答頂いた方について、どのような事にご興味をお持ちであるかをご記入下さい
      </dt><dd class="data ">
         <?php echo$data['Register']['firstank29']?><br>      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       いつまでに海外での事業をスタートさせたいですか？
      </dt><dd class="data multi1">
        <?php echo$data['Register']['firstank30']?> <br>      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       「既に開始している」とご回答頂いた方について、国名
      </dt><dd class="data ">
       <?php echo$data['Register']['firstank31']?> <br>      </dd>
     </dl>
     <dl class="cf">
      <dt class="title">
       その他（ご質問、ご要望などございましたらご記入ください）
      </dt><dd class="data ">
       <?php echo$data['Register']['firstank32']?>  <br>      </dd>
     </dl>
   </div>
  <!-- HIDDEN_PARAM END -->
  <input type="hidden" name="firstank10" value=<?php echo $data['Register']['firstank10']?>>
  <input type="hidden" name="firstank11" value=<?php echo $data['Register']['firstank11']?>>
  <input type="hidden" name="firstank12" value=<?php echo $data['Register']['firstank12']?>>
  <input type="hidden" name="firstank13" value=<?php echo $data['Register']['firstank13']?>>
  <input type="hidden" name="firstank14" value=<?php echo $data['Register']['firstank14']?>>
  <input type="hidden" name="firstank15" value=<?php echo $data['Register']['firstank15']?>>
  <input type="hidden" name="firstank16" value=<?php echo $data['Register']['firstank16']?>>
  <input type="hidden" name="firstank17" value=<?php echo $data['Register']['firstank17']?>>
  <input type="hidden" name="firstank18" value=<?php echo $data['Register']['firstank18']?>>
  <input type="hidden" name="firstank19" value=<?php echo $data['Register']['firstank19']?>>
  <input type="hidden" name="firstank20" value=<?php echo $data['Register']['firstank20']?>>
  <input type="hidden" name="firstank21" value=<?php echo $data['Register']['firstank21']?>>
  <input type="hidden" name="firstank22" value=<?php echo $data['Register']['firstank22']?>>
  <input type="hidden" name="firstank23" value=<?php echo $data['Register']['firstank23']?>>
  <input type="hidden" name="firstank24" value=<?php echo $data['Register']['firstank24']?>>
  <input type="hidden" name="firstank25" value=<?php echo $data['Register']['firstank25']?>>
  <input type="hidden" name="firstank26" value=<?php echo $data['Register']['firstank26']?>>
  <input type="hidden" name="firstank27" value=<?php echo $data['Register']['firstank27']?>>
  <input type="hidden" name="firstank28" value=<?php echo $data['Register']['firstank28']?>>
  <input type="hidden" name="firstank29" value=<?php echo $data['Register']['firstank29']?>>
  <input type="hidden" name="firstank30" value=<?php echo $data['Register']['firstank30']?>>
  <input type="hidden" name="firstank31" value=<?php echo $data['Register']['firstank31']?>>
  <input type="hidden" name="firstank32" value=<?php echo $data['Register']['firstank32']?>>
  
  
  <input type="hidden" name="confirm" value="true">
  <input class="submit" type="submit" name="submit" value="送信"> 
  <input class="back submit" type="button" name="SMPFORM_BACK" value="戻る">
 </form>
   
<?php
}else{
    ?>
 <div class="body_tbl">
<!-- SMP_TEMPLATE_HEADER start -->
 <h1>JapanCircleへのメンバー登録が完了致しました。</h1>
<!-- SMP_TEMPLATE_HEADER end -->
<!-- SMP_TEMPLATE_FORM start -->

 <div class="smp_tmpl">
  <div class="sub_text">
   <p>ご登録ありがとうございました。</p>

   <p><a href="http://japan-circle.jp/" japancircle="" targer="blank">ジャパンサークルトップページ</a>に戻る。</p>
  </div>
 </div>
<!-- SMP_TEMPLATE_FORM end -->
<!-- ここから -->
 <?php
}
?>
                
                <table class="spiralSeal">
                <tbody>
                        <tr>
                                <td style="font-size:11px; padding:5px;" class="description">
                                        ご登録される情報は、暗号化された通信(SSL)で保護され、
                                        プライバシーマークやISO27001/JIS Q 27001, ISO20000-1, ISO9001の認証を取得している
                                        <a href="http://www.pi-pe.co.jp/" target="_blank" title="株式会社パイプドビッツ">
                                                株式会社パイプドビッツ
                                        </a>
                                        による
                                        <a href="https://www.pi-pe.co.jp/security/customer_db.html" target="_blank" title="データベース管理のためのASPサービス「スパイラル」">
                                                情報管理システム「スパイラル」
                                        </a>
                                        で安全に管理されます。
                                </td>
                                <td style="padding:5px;" class="img">
                                        <script type="text/javascript" src="./img/seal.png">
                                        </script>
                                        <a href="https://reg18.smp.ne.jp/spiral/servlet/seal.Seal?s=53EqIE&lang=ja&_act=GetDetail" target="_blank">
                                                <img alt="" title="SPIRAL SEAL" src="./img/seal.png" style="border:0px;float:right;">
                                        </a>
                                </td>
                        </tr>
                </tbody>
        </table>

<div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;">
                <div>
                        <div class="logo"><img src="./img/translate-32.png" width="20" height="20">
                        </div>
                </div>
        </div>
        <div class="top" style="padding: 8px; float: left; width: 100%;">
                <h1 class="title gray">Original text</h1>
        </div>
        <div class="middle" style="padding: 8px;">
                <div class="original-text">
                </div>
        </div>
        <div class="bottom" style="padding: 8px;">
                <div class="activity-links">
                        <span class="activity-link">
                                Contribute a better translation
                        </span>
                        <span class="activity-link">
                        </span>
                </div>
                <div class="started-activity-container">
                        <hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;">
                        <div class="activity-root">
                        </div>
                </div>
        </div>
</div>
</div>
<br>





                