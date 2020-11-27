<?php

namespace frontend\controllers;

use Yii;
use frontend\models\PenjualanItem;
use frontend\models\PenjualanItemSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PenjualanItemController implements the CRUD actions for PenjualanItem model.
 */
class PenjualanItemController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all PenjualanItem models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PenjualanItemSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PenjualanItem model.
     * @param string $no_penjualan
     * @param string $kd_obat
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_penjualan, $kd_obat)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_penjualan, $kd_obat),
        ]);
    }

    /**
     * Creates a new PenjualanItem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PenjualanItem();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_penjualan' => $model->no_penjualan, 'kd_obat' => $model->kd_obat]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PenjualanItem model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_penjualan
     * @param string $kd_obat
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_penjualan, $kd_obat)
    {
        $model = $this->findModel($no_penjualan, $kd_obat);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_penjualan' => $model->no_penjualan, 'kd_obat' => $model->kd_obat]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PenjualanItem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_penjualan
     * @param string $kd_obat
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_penjualan, $kd_obat)
    {
        $this->findModel($no_penjualan, $kd_obat)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PenjualanItem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_penjualan
     * @param string $kd_obat
     * @return PenjualanItem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_penjualan, $kd_obat)
    {
        if (($model = PenjualanItem::findOne(['no_penjualan' => $no_penjualan, 'kd_obat' => $kd_obat])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
