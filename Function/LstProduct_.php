<?php
require_once('db.php');
class LstProduct
{
  public static function getFilteredProducts($lst_id, $lst_id2, $minPrice, $maxPrice)
{
    try {
        $conn = DP::getConnection();

        if ($conn === null) {
            throw new Exception("Kết nối đến cơ sở dữ liệu thất bại.");
        }
        
        $query =
        "SELECT b.Id AS BookId,
                       b.Name AS BookName,
                       b.Price,
                       b.TypeDetailId,
                       t.Name AS BookTypeName,
                       i.Path
                FROM book b
                LEFT JOIN image i ON b.Id = i.BookId
                LEFT JOIN typedetail td ON td.Id = b.TypedetailId
                JOIN type t ON t.Id = td.TypeId
                WHERE i.Id = (SELECT MIN(i2.Id) FROM image i2 WHERE i2.BookId = b.Id)";
        if (!is_null($lst_id)) {
            $query .= " AND td.TypeId = :lst_id";
            $parameters[':lst_id'] = $lst_id;
        }
        if (!is_null($lst_id2)) {
            $query .= " AND td.Id = :lst_id2";
                $parameters[':lst_id2'] = $lst_id2;
        }
        if ($minPrice >= 0 && $maxPrice < PHP_INT_MAX) {
            $query .= " AND b.Price BETWEEN :minPrice AND :maxPrice";
        }

        $stmt = $conn->prepare($query);

        if (!is_null($lst_id)) {
            $stmt->bindParam(':lst_id', $lst_id, PDO::PARAM_INT);
        }
        if (!is_null($lst_id2)) {
            $stmt->bindParam(':lst_id2', $lst_id2, PDO::PARAM_INT);
        }
        if ($minPrice >= 0 && $maxPrice < PHP_INT_MAX) {
            $stmt->bindParam(':minPrice', $minPrice, PDO::PARAM_INT);
            $stmt->bindParam(':maxPrice', $maxPrice, PDO::PARAM_INT);
        }

        // Thực thi truy vấn
        $stmt->execute();

        // Lấy tất cả các kết quả
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
        return false;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}
public static function getLstProduct($lst_id = null, $lst_id2 = null, $limit = null, $offset = null, $countOnly = false)
{
    $parameters = []; // Các tham số truy vấn
    $resultType = $countOnly ? PDO::FETCH_ASSOC : 2; // Định dạng kết quả

    // Câu truy vấn cơ bản
    $query = $countOnly 
        ? "SELECT COUNT(DISTINCT b.Id) AS totalProducts FROM book b"
        : "SELECT 
            b.Id AS BookId,
            b.Name AS BookName, 
            b.Price, 
            b.TypeDetailId, 
            bt.Name AS BookTypeName,
            i.Path
        FROM book b";
    $query .= " 
        JOIN TypeDetail bt ON b.TypeDetailId = bt.Id
        LEFT JOIN image i ON b.Id = i.BookId
        LEFT JOIN Type t ON bt.TypeId = t.Id
    WHERE 
        i.Id = (
            SELECT MIN(i2.Id)
            FROM image i2
            WHERE i2.BookId = b.Id
        )";

    // Điều kiện lọc
    if ($lst_id !== null) {
        $query .= " AND t.Id = :lst_Id";
        $parameters[':lst_Id'] = $lst_id;
    }

    if ($lst_id2 !== null) {
        $query .= " AND b.TypeDetailId = :lst_Id2";
        $parameters[':lst_Id2'] = $lst_id2;
    }

    // Nếu không phải đếm, thêm LIMIT và OFFSET
    if (!$countOnly && $limit !== null && $offset !== null) {
        $query .= " LIMIT " . (int)$limit . " OFFSET " . (int)$offset;
    }

    // Thực thi truy vấn
    $result = DP::run_query($query, $parameters, $resultType);

    // Nếu là đếm, trả về tổng số sản phẩm
    return $countOnly ? $result[0]['totalProducts'] : $result;
}

  public static function getBookTypes()
  {
    $query = "SELECT Id, Name FROM `Type` ORDER BY Id ASC";
    $parameters = [];
    $resultType = 2;
    return DP::run_query($query, $parameters, $resultType);
  }

  // Phương thức lấy danh sách các chi tiết loại sách
  public static function getTypeDetails()
  {
    $query = "SELECT * FROM `typedetail` WHERE 1";
    $parameters = [];
    $resultType = 2;
    return DP::run_query($query, $parameters, $resultType);
  }

  // Phương thức lấy danh sách các loại bìa
  public static function getCoverTypes()
  {
    $query = "SELECT * FROM `covertype` WHERE 1";
    $parameters = [];
    $resultType = 2;
    return DP::run_query($query, $parameters, $resultType);
  }

  // Phương thức lấy danh sách nhà xuất bản
  public static function getPublishers()
  {
    $query = "SELECT * FROM `publisher` WHERE 1";
    $parameters = [];
    $resultType = 2;
    return DP::run_query($query, $parameters, $resultType);
  }

  // Phương thức lấy 4 chi tiết loại sách theo loại sách
  public static function getTop4TypeDetailsByTypeId($typeId)
  {
    $query = "SELECT * FROM typedetail WHERE TypeId = :typeId";
    $parameters = [':typeId' => $typeId];
    $resultType = 2;
    return DP::run_query($query, $parameters, $resultType);
  }

  // Phương thức lấy tất cả các chi tiết loại sách cho mỗi loại sách
  public static function getAllTypeDetailsForBookTypes()
  {
    $typedetailList = [];
    $bookTypes = self::getBookTypes();

    foreach ($bookTypes as $bookType) {
      $typeId = $bookType['Id'];
      $Top4typeDetails = self::getTop4TypeDetailsByTypeId($typeId);
      $typedetailList = array_merge($typedetailList, $Top4typeDetails);
    }

    return $typedetailList;
  }
  public static function pagination(){
    // Số sản phẩm hiển thị trên mỗi trang

  }
}
