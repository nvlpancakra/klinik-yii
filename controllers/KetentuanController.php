<?php

namespace app\controllers;

use app\models\KetentuanTindakan;
use app\models\KetentuanTindakanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KetentuanController implements the CRUD actions for KetentuanTindakan model.
 */
class KetentuanController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all KetentuanTindakan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KetentuanTindakanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single KetentuanTindakan model.
     * @param string $Dosis_Obat Dosis Obat
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Dosis_Obat)
    {
        return $this->render('view', [
            'model' => $this->findModel($Dosis_Obat),
        ]);
    }

    /**
     * Creates a new KetentuanTindakan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new KetentuanTindakan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Dosis_Obat' => $model->Dosis_Obat]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing KetentuanTindakan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $Dosis_Obat Dosis Obat
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Dosis_Obat)
    {
        $model = $this->findModel($Dosis_Obat);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Dosis_Obat' => $model->Dosis_Obat]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing KetentuanTindakan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Dosis_Obat Dosis Obat
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Dosis_Obat)
    {
        $this->findModel($Dosis_Obat)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the KetentuanTindakan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Dosis_Obat Dosis Obat
     * @return KetentuanTindakan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Dosis_Obat)
    {
        if (($model = KetentuanTindakan::findOne(['Dosis_Obat' => $Dosis_Obat])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
