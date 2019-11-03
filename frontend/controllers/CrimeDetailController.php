<?php

namespace frontend\controllers;

use Yii;
use frontend\models\CrimeDetail;
use frontend\models\CrimeDetailSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CrimeDetailController implements the CRUD actions for CrimeDetail model.
 */
class CrimeDetailController extends Controller
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
     * Lists all CrimeDetail models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays a single CrimeDetail model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($location)
    {
        $crimeData                  = array();
        $totalCrime                 = 0;
        $searchModel                = new CrimeDetailSearch();
        $dataProvider               = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->where(['location' => $location]);

        // $crimeDetailModel       = new CrimeDetail();
        // $crimeDetailProvider    = $crimeDetailModel->find()->select('crime_type, count(crime_type) as number')
        //     ->groupBy('crime_type')
        //     ->all();

        $crimeDetailProvider = Yii::$app->db->createCommand('
            SELECT
                crime_type, COUNT(crime_type) as number
            FROM 
                crime_detail
            WHERE
                location = "' . $location . '"
            GROUP BY crime_type')
            ->queryAll();

        $command = Yii::$app->db->createCommand('
            SELECT
                COUNT(crime_type)
            FROM
                crime_detail
            WHERE
                location = "' . $location . '"
                ');
        $totalCrime = $command->queryScalar();


        foreach($crimeDetailProvider as $key=>$value) {
            #echo 'index is '.$key.' and value is '.$value['crime_type'];
            array_push($crimeData, array('label'=>$value['crime_type'], 'y'=>($value['number']/$totalCrime*100)));
        }

        return $this->render('view', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'crimeData' => $crimeData,
            'totalCrime' => $totalCrime
        ]);

        // return $this->render('view', [
        //     'model' => $this->findModel($id),
        // ]);
    }

    /**
     * Creates a new CrimeDetail model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CrimeDetail();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CrimeDetail model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CrimeDetail model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CrimeDetail model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CrimeDetail the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CrimeDetail::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
