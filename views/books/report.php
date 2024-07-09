<?php
use app\Models\Books;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Relatório de Livros';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="book-report">
    <h1><?= Html::encode($this->title) ?></h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Categoria</th>
                <th>ISBN</th>
                <th>Data de Publicação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book): ?>
                <tr>
                    <td><?= Html::encode($book->id) ?></td>
                    <td><?= Html::encode($book->title) ?></td>
                    <td><?= Html::encode($book->author->name) ?></td> <!-- Supondo que há um relacionamento com o autor -->
                    <td><?= Html::encode($book->category->name) ?></td> <!-- Supondo que há um relacionamento com a categoria -->
                    <td><?= Html::encode($book->isbn) ?></td>
                    <td><?= Html::encode(Yii::$app->formatter->asDate($book->published_date)) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
