<!--親テンプレ読み込み-->

<?php $__env->startSection('content'); ?>
    <div class="panel-body">
        <!-- バリデーションエラーの表示に使用-->
        <?php echo $__env->make('common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- バリデーションエラーの表示に使用-->
        
        <!-- 物件登録フォーム -->
        <form action="<?php echo e(url('realestates')); ?>" method="POST" class="form-horizontal">
            
            <?php echo e(csrf_field()); ?>

            
            <!-- 物件のタイトル -->
            <div class="form-group">
                
                <div class="col-sm-6">
                    <label for="name" class="col-sm-3 control-label">物件名</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                
                <div class="col-sm-6">
                    <label for="address" class="col-sm-3 control-label">住所</label>
                    <input type="text" name="address" id="address" class="form-control">
                </div>
                
                <div class="col-sm-6">
                    <label for="latitude" class="col-sm-3 control-label">緯度</label>
                    <input type="text" name="latitude" id="latitude" class="form-control">
                </div>
                
                <div class="col-sm-6">
                    <label for="longitude" class="col-sm-3 control-label">経度</label>
                    <input type="text" name="longitude" id="longitude" class="form-control">
                </div>
                
                <div class="col-sm-6">
                    <label for="url_top" class="col-sm-3 control-label">管理会社URL</label>
                    <input type="text" name="url_top" id="url_top" class="form-control">
                </div>
                
                <div class="col-sm-6">
                    <label for="url_estate" class="col-sm-3 control-label">物件詳細URL</label>
                    <input type="text" name="url_estate" id="url_estate" class="form-control">
                </div>
                
            </div>

            <!-- 物件登録ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="glyphicon glyphicon-plus"></i> Save
                    </button>
                </div>
            </div>
        </form>
        
        <!-- 物件一覧 -->
        <?php if(count($realestates) > 0): ?>
            <div class="panel panel-default">
                <div class="panel-heading"> 物件一覧 </div>
                <div class="panel-body">
                    <table class="table table-striped task-table">
                        
                        <!-- テーブルヘッダ -->
                        <thead> 
                            <th>物件一覧</th>
                            <th>&nbsp;</th>
                        </thead>
                        
                        <!-- テーブル本体 -->
                        <tbody>
                            <?php $__currentLoopData = $realestates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $realestate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                
                                <!-- 物件名 -->
                                <td class="table-text">
                                    <div><?php echo e($realestate->name); ?></div>
                                </td>
                                
                                <!-- 物件更新ボタン --> 
                                <td>
                                    <form action="<?php echo e(url('realestatesedit/'.$realestate->id)); ?>" method="POST">
                                        <?php echo e(csrf_field()); ?>

                                        <button type="submit" class="btn btn-primary">
                                            <i class="glyphicon glyphicon-pencil"></i> 更新 
                                        </button>
                                    </form>
                                </td>
                                
                                <!-- 物件削除ボタン -->
                                <td>
                                    <form action="<?php echo e(url('realestate/'.$realestate->id)); ?>" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo e(method_field('DELETE')); ?>

                                    
                                        <button type="submit" class="btn btn-danger">
                                            <i class="glyphicon glyphicon-trash"></i> 削除
                                        </button>
                                    </form>
                                </td>
                                
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        </tbody>
                    </table> 
                </div>
            </div> 
        <?php endif; ?>
        <!-- 物件一覧end -->
                    
                    
                    
                    
                    
                    
    </div>
                <!-- Book: 既に登録されてる物件のリスト -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>