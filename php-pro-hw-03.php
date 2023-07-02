<?php

//перший проблемний клас

//class OrderProcessor
//{
//    public function processOrder($order)
//    {
//        if ($order->type == 'product') {
//            // Обробка замовлення на товар
//            $this->generateReport('order with type product', 'pdf');
//        } elseif ($order->type == 'service') {
//            // Обробка замовлення на послугу
//            $this->generateReport('order with type service', 'CSV');
//        } elseif ($order->type == 'delivery') {
//            // Обробка замовлення на доставку
//            $this->generateReport('order with type delivery', 'pdf');
//        }
//    }
//
//    public function generateReport($data, $format)
//    {
//        if ($format === 'pdf') {
//            // Логіка генерації звіту у форматі PDF
//        } elseif ($format === 'csv') {
//            // Логіка генерації звіту у форматі CSV
//        }
//        // Інші формати звіту
//    }
//}

interface orders
{
    public function processOrder(): bool;
}

class OrderProduct implements orders
{

    public function processOrder(): bool
    {
        // Обробка замовлення на товар
        return true; // зміниться в залежності від результату обробки
    }
}

class OrderService implements orders
{

    public function processOrder(): bool
    {
        // Обробка замовлення на послугу
        return true; // зміниться в залежності від результату обробки
    }
}

class OrderDelivery implements orders
{

    public function processOrder(): bool
    {
        // Обробка замовлення на доставку
        return true; // зміниться в залежності від результату обробки
    }
}

class OrderProcessor
{
    public function processOrder(orders $order)
    {
        $order->processOrder();
    }
}

interface reports
{
    public function generateReport(mixed $data): bool;
}

class ReportInPdf implements reports
{

    public function generateReport(mixed $data): bool
    {
        // Логіка генерації звіту у форматі PDF
        return true; // зміниться в залежності від результату генерації
    }
}

class ReportInCsv implements reports
{

    public function generateReport(mixed $data): bool
    {
        // Логіка генерації звіту у форматі CSV
        return true; // зміниться в залежності від результату генерації
    }
}

class ReportGenerator
{
    public function generateReport(reports $report, $data)
    {
        $report->generateReport($data);
    }
}

//другий проблемний клас

//class DataManager {
//    public function saveData($data) {
//        // Збереження даних в базі даних
//    }
//
//    public function displayData($data) {
//        // Відображення даних на веб-сторінці
//    }
//}

class DataSaver
{
    public function saveData($data)
    {
        // Збереження даних в базі даних
    }
}

class DataDisplay
{
    public function displayData($data)
    {
        // Відображення даних на веб-сторінці
    }
}

//третій проблемний клас

//class User
//{
//    public function authenticate($username, $password, $role)
//    {
//        // Логіка аутентифікації користувача
//    }
//
//    public function displayProfile($userId)
//    {
//        // Відображення профілю користувача
//    }
//}

class UserAuth
{
    public function authenticate($username, $password, $role)
    {
        // Логіка аутентифікації користувача
    }
}

class UserDisplay
{
    public function displayProfile($userId)
    {
        // Відображення профілю користувача
    }
}

//четвертий проблемний клас

//class FileManager
//{
//    public function readFile($filename)
//    {
//        // Читання файлу
//        // визначення розширення $ext
//        if ($ext === 'txt') {
//            // Читання запису файлів типу txt
//        } elseif ($ext === 'csv') {
//            // Читання запису файлів типу csv
//        } else {
//            //  Читання запису файлів інших типів
//        }
//    }
//
//    public function writeFile($filename, $data)
//    {
//        // Запис даних в файл
//        // визначення розширення $ext
//        if ($ext === 'txt') {
//            // функціонал запису файлів типу txt
//        } elseif ($ext === 'csv') {
//            // функціонал запису файлів типу csv
//        } else {
//            //  функціонал запису файлів інших типів
//        }
//    }
//}

interface files
{
    public function readFile(string $filename): bool;

    public function writeFile(string $filename, mixed $data): bool;
}

class TxtFile implements files
{
//    protected string $filename

    public function readFile(string $filename): bool
    {
        // Читання файлу
        // Читання запису файлів типу txt
        return true; // зміниться в залежності від результату читання
    }

    public function writeFile(string $filename, mixed $data): bool
    {
        // Запис даних в файл
        // функціонал запису файлів типу txt
        return true; // зміниться в залежності від результату читання
    }
}

class CsvFile implements files
{

    public function readFile(string $filename): bool
    {
        // Читання файлу
        // Читання запису файлів типу csv
        return true; // зміниться в залежності від результату читання
    }

    public function writeFile(string $filename, mixed $data): bool
    {
        // Запис даних в файл
        // функціонал запису файлів типу csv
        return true; // зміниться в залежності від результату читання
    }
}

class FileReader
{
    public function readFile(files $file, $filename)
    {
        $file->readFile($filename);
    }
}

class FileWriter
{
    public function writeFile(files $file, $filename, $data)
    {
        $file->writeFile($filename, $data);
    }
}

//п'ятий проблемний клас

//class Order {
//    public function processOrder($orderData) {
//        // Обробка замовлення
//    }
//
//    public function displayOrderInfo($orderId) {
//        // Відображення інформації про замовлення
//    }
//}

class OrderProcessing {
    public function processOrder($orderData) {
        // Обробка замовлення
    }
}

class OrderDisplay {
    public function displayOrderInfo($orderId) {
        // Відображення інформації про замовлення
    }
}